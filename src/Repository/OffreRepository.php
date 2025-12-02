<?php

namespace App\Repository;

use App\Entity\Offre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Offre>
 *
 * @method Offre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offre[]    findAll()
 * @method Offre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Offre::class);
    }

    public function save(Offre $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Offre $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Récupère toutes les offres pour une annonce (listing)
     */
    public function findByListing($listingId)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.listing = :listing')
            ->setParameter('listing', $listingId)
            ->orderBy('o.datePropose', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les offres d'un utilisateur
     */
    public function findByUtilisateur($utilisateurId)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.utilisateur = :utilisateur')
            ->setParameter('utilisateur', $utilisateurId)
            ->orderBy('o.datePropose', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les offres avec un certain statut
     */
    public function findByStatut($statut)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.statut = :statut')
            ->setParameter('statut', $statut)
            ->orderBy('o.datePropose', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les offres en attente pour une annonce
     */
    public function findPendingByListing($listingId)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.listing = :listing')
            ->andWhere('o.statut = :statut')
            ->setParameter('listing', $listingId)
            ->setParameter('statut', 'En attente')
            ->orderBy('o.prixPropose', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
