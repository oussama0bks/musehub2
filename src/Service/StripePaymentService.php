<?php

namespace App\Service;

use App\Entity\Listing;
use App\Entity\Transaction;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class StripePaymentService
{
    private string $stripeSecretKey;
    private string $appUrl;

    public function __construct(
        ParameterBagInterface $params,
        private EntityManagerInterface $em
    ) {
        $this->stripeSecretKey = $params->get('stripe_secret_key');
        // Validate the secret key format early to fail fast when misconfigured
        if (!is_string($this->stripeSecretKey) || !str_starts_with($this->stripeSecretKey, 'sk_')) {
            throw new \RuntimeException('Stripe secret key invalide. Veuillez définir STRIPE_SECRET_KEY dans votre .env.local et vérifier qu\'elle commence par "sk_".');
        }

        $this->appUrl = $params->get('app_url');
        Stripe::setApiKey($this->stripeSecretKey);
    }

    /**
     * Crée une session Stripe Checkout pour un achat direct
     *
     * @param Listing $listing
     * @param string $buyerEmail
     * @param string $buyerUuid
     * @return array{checkoutUrl: string, sessionId: string}
     */
    public function createCheckoutSession(
        Listing $listing,
        string $buyerEmail,
        string $buyerUuid
    ): array {
        // Créer la Transaction en base (status: pending_payment)
        $transaction = new Transaction();
        $transaction->setBuyerUuid($buyerUuid);
        $transaction->setListingUuid($listing->getUuid());
        $transaction->setAmount($listing->getPrice());
        $transaction->setStatus('pending_payment');

        $this->em->persist($transaction);
        $this->em->flush();

        // Créer la session Stripe
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Annonce #' . $listing->getId(),
                        'description' => 'Artwork UUID: ' . $listing->getArtworkUuid(),
                        'metadata' => [
                            'listing_id' => $listing->getId(),
                            'listing_uuid' => $listing->getUuid(),
                        ],
                    ],
                    'unit_amount' => (int)($listing->getPrice() * 100), // En centimes
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'customer_email' => $buyerEmail,
            'client_reference_id' => $transaction->getUuid(),
            'metadata' => [
                'transaction_id' => $transaction->getId(),
                'transaction_uuid' => $transaction->getUuid(),
                'listing_id' => $listing->getId(),
                'listing_uuid' => $listing->getUuid(),
                'buyer_uuid' => $buyerUuid,
            ],
            'success_url' => $this->appUrl . '/marketplace/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => $this->appUrl . '/marketplace/cancel?session_id={CHECKOUT_SESSION_ID}',
        ]);

        return [
            'checkoutUrl' => $session->url,
            'sessionId' => $session->id,
        ];
    }

    /**
     * Complète une transaction après paiement réussi
     *
     * @param string $sessionId
     * @return Transaction|null
     */
    public function completeTransaction(string $sessionId): ?Transaction
    {
        $session = Session::retrieve($sessionId);

        if ($session->payment_status !== 'paid') {
            return null;
        }

        // Récupérer la transaction via le metadata
        $transactionUuid = $session->metadata->transaction_uuid ?? null;
        if (!$transactionUuid) {
            return null;
        }

        $transactionRepository = $this->em->getRepository(Transaction::class);
        $transaction = $transactionRepository->findOneBy(['uuid' => $transactionUuid]);

        if (!$transaction) {
            return null;
        }

        // Mettre à jour le statut à 'paid'
        $transaction->setStatus('paid');
        $this->em->flush();

        return $transaction;
    }

    /**
     * Annule une transaction si le paiement est annulé
     *
     * @param string $sessionId
     * @return void
     */
    public function cancelTransaction(string $sessionId): void
    {
        $session = Session::retrieve($sessionId);

        $transactionUuid = $session->metadata->transaction_uuid ?? null;
        if (!$transactionUuid) {
            return;
        }

        $transactionRepository = $this->em->getRepository(Transaction::class);
        $transaction = $transactionRepository->findOneBy(['uuid' => $transactionUuid]);

        if ($transaction && $transaction->getStatus() === 'pending_payment') {
            $transaction->setStatus('canceled');
            $this->em->flush();
        }
    }

    /**
     * Récupère une session Stripe
     *
     * @param string $sessionId
     * @return Session
     */
    public function getSession(string $sessionId): Session
    {
        return Session::retrieve($sessionId);
    }
}
