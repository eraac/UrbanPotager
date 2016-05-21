<?php

namespace CoreBundle\Repository;

use CoreBundle\Entity\Garden;
use CoreBundle\Entity\Type;

/**
 * AlertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AlertRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAlertByGardenAndType(Garden $garden, Type $type)
    {
        $qb = $this->createQueryBuilder('a')
                    ->where('a.garden = :garden')
                    ->andWhere('a.type = :type')
                    ->setParameters([
                        'garden' => $garden,
                        'type' => $type,
                    ]);

        return $qb->getQuery()->getResult();
    }
}