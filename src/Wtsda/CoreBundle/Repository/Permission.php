<?php

namespace Wtsda\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

class Permission extends EntityRepository
{
    public function findAllOrderedByResource()
    {
        return $this->getEntityManager()
                    ->createQuery('SELECT p FROM WtsdaCoreBundle:Permission p ORDER BY p.resource ASC')
                    ->getResult();
    }
}
