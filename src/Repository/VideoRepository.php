<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\AbstractQuery;

/**
 * @method user|null find($id, $lockMode = null, $lockVersion = null)
 * @method user|null findOneBy(array $criteria, array $orderBy = null)
 * @method user[]    findAll()
 * @method user[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoRepository extends ServiceEntityRepository
{
    /**
     * VideoRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct( ManagerRegistry $registry)
    {
        parent::__construct($registry, Video::class);
    }
}