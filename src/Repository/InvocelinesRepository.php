<?php

namespace App\Repository;

use App\Entity\Invoicelines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Invoicelines|null find($id, $lockMode = null, $lockVersion = null)
 * @method Invoicelines|null findOneBy(array $criteria, array $orderBy = null)
 * @method Invoicelines[]    findAll()
 * @method Invoicelines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoicelinesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Invoicelines::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Invoicelines $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Invoicelines $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

  
}
