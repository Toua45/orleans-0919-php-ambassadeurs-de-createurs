<?php

namespace App\Repository;

use App\Controller\FavoriteController;
use App\Entity\Favorite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Favorite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Favorite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Favorite[]    findAll()
 * @method Favorite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FavoriteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Favorite::class);
    }

    public function findFavoriteByUser($userId, ?int $page = null)
    {
        $qb = $this->createQueryBuilder('f')
            ->join('f.user', 'u')
            ->join('f.userFavorite', 'uf')
            ->where("f.user = :userId")
            ->orderBy('uf.firstname', 'ASC')
            ->setParameter('userId', $userId);

        if ($page !== null) {
                $firstResult = ($page - 1) * FavoriteController::NB_MAX_FAVORITES;
                $qb->setFirstResult($firstResult)->setMaxResults(FavoriteController::NB_MAX_FAVORITES);
        }

        return $qb->getQuery()->execute();
    }
}
