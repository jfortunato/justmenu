<?php namespace JustMenu\Repository\Order;

interface OrderRepositoryInterface
{
    public function create();
    public function createFromArray(array $input);
    public function getEntityManager();
}
