<?php namespace JustMenu\Repository;

use Doctrine\ORM\EntityRepository as BaseEntityRepository;

abstract class EntityRepository extends BaseEntityRepository
{
    public function createNew()
    {
        $className = $this->getClassName();

        return new $className;
    }
}
