<?php

namespace App\Controller;

use App\Repository\ListingRepository;
use App\Repository\TransactionRepository;
use App\Service\StripePaymentService;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Event;
use Stripe\Webhook;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/webhooks')]
class WebhookController extends AbstractController
{
    public function __construct(
        private StripePaymentService $stripePaymentService,
        private TransactionRepository $transactionRepository,
        private ListingRepository $listingRepository,
        private EntityManagerInterface $em,
        private ParameterBagInterface $params
    ) {
    }

    /**
     * Handle Stripe webhook events
     */
    #[Route('/stripe', name: 'stripe_webhook', methods: ['POST'])]
    public function handleStripeWebhook(Request $request): Response
    {
        $payload = $request->getContent();
        $sigHeader = $request->headers->get('stripe-signature');
        $endpointSecret = $this->params->get('stripe_webhook_secret');

        try {
            // Vérifier la signature Stripe
            $event = Webhook::constructEvent(
                $payload,
                $sigHeader,
                $endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            return new Response('Invalid payload', Response::HTTP_BAD_REQUEST);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            return new Response('Invalid signature', Response::HTTP_BAD_REQUEST);
        }

        // Traiter les événements
        switch ($event->type) {
            case 'checkout.session.completed':
                $session = $event->data->object;
                $this->handleCheckoutSessionCompleted($session);
                break;

            case 'checkout.session.expired':
                $session = $event->data->object;
                $this->handleCheckoutSessionExpired($session);
                break;

            case 'charge.refunded':
                $charge = $event->data->object;
                $this->handleChargeRefunded($charge);
                break;

            default:
                // Événement non traité
                break;
        }

        return new Response('Webhook handled', Response::HTTP_OK);
    }

    /**
     * Traite un paiement réussi
     */
    private function handleCheckoutSessionCompleted($session): void
    {
        try {
            // Compléter la transaction via le Stripe Service
            $transaction = $this->stripePaymentService->completeTransaction($session->id);

            if (!$transaction) {
                return;
            }

            // Récupérer l'annonce et la marquer comme vendue
            $listing = $this->listingRepository->findOneBy(['uuid' => $transaction->getListingUuid()]);

            if ($listing) {
                // Décrémenter le stock et marquer vendue si stock <= 0
                $listing->setStock($listing->getStock() - 1);
                if ($listing->getStock() <= 0) {
                    $listing->setStatus('sold_out');
                }

                $this->em->persist($listing);
                $this->em->flush();
            }
        } catch (\Exception $e) {
            // Logger l'erreur
            error_log('Stripe webhook error: ' . $e->getMessage());
        }
    }

    /**
     * Traite une session expirée
     */
    private function handleCheckoutSessionExpired($session): void
    {
        try {
            // Annuler la transaction
            $this->stripePaymentService->cancelTransaction($session->id);
        } catch (\Exception $e) {
            error_log('Stripe webhook error (expired): ' . $e->getMessage());
        }
    }

    /**
     * Traite un remboursement
     */
    private function handleChargeRefunded($charge): void
    {
        try {
            // Trouver la transaction par le charge ID
            // (à adapter selon votre implémentation)
            // Pour maintenant, on met à jour simplement le statut
        } catch (\Exception $e) {
            error_log('Stripe webhook error (refund): ' . $e->getMessage());
        }
    }
}
