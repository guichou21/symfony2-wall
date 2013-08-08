<?php

namespace GbCreation\WallBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ItemRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ItemRepository extends EntityRepository
{

	 public function getAllItems()
    {
        
      $query = $this->createQueryBuilder('i')
      ->orderBy('i.date', 'DESC')
      ->getQuery();
 
    	return $query->getResult();
    }

   public function getLastItems($nbItem=10)
    {
        
      $query = $this->createQueryBuilder('i')
      ->orderBy('i.date', 'DESC')
      ->setMaxResults($nbItem)
      ->getQuery();

      return $query->getResult();
    }

    public function getItemsInRange($firstItem=0,$nbItem=10)
    {
        
      $query = $this->createQueryBuilder('i')
      ->orderBy('i.date', 'DESC')
      ->setMaxResults($nbItem)
      ->setFirstResult($firstItem)
      ->getQuery();

      return $query->getResult();
    }


    public function getItemsWithComments()
    {
        
      $query = $this->createQueryBuilder('i')
      ->leftJoin('i.comments', 'c')
      ->addSelect('c')
      ->orderBy('i.date', 'DESC')
      ->getQuery();
 
    	return $query->getResult();
    }

    public function countAllItems()
    {
        
      $query = $this->createQueryBuilder('i')
      ->select('COUNT(i)')
      ->getQuery();

      return $query->getSingleScalarResult();
    }



}