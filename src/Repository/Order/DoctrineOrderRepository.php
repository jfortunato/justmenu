<?php namespace JustMenu\Repository\Order;

use JustMenu\Repository\EntityRepository;

class DoctrineOrderRepository extends EntityRepository implements OrderRepositoryInterface
{
    public function create()
    {
        return $this->createNew();
    }
}
