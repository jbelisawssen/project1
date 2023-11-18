<?php

namespace App\Repository;

use App\Entity\Artiste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Artiste>
 *
 * @method Artiste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artiste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artiste[]    findAll()
 * @method Artiste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtisteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Artiste::class);
    }

    public function add(Artiste $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Artiste $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param array $data
     * 
     * @return Artiste|null
     */
    public function updateArtiste(array $data)
    {
    
        try {
            $artiste = $this->findOneBy($data['id']);

            if(null === $artiste) {
                $artiste = new Artiste();
            }

            $artiste->setFirstname($data['firstName']);
            $artiste->setLastName($data['lastName']);
            $artiste->setDateBirth($data['dateBirth']);
            $this->getEntityManager()->persist($artiste);
            $this->getEntityManager()->flush();
        } catch(\Exception $e) {
            return null;
        }

     return $artiste;
    
    }
}
