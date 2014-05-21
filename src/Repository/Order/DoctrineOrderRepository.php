<?php namespace JustMenu\Repository\Order;

use JustMenu\Repository\EntityRepository;

class DoctrineOrderRepository extends EntityRepository implements OrderRepositoryInterface
{
    public function create()
    {
        return $this->createNew();
    }

    public function createFromArray(array $input)
    {
        $order = $this->create();

        $order->setName($input['name']);
        $order->setPhoneNumber($input['phone']);
        $order->setEmail($input['email']);
        $order->setSpecialInstructions($input['instructions']);
        $order->setMethod($input['method']);
        $order->setPaymentMethod($input['paymentmethod']);
        $order->setContents($input['contents']);

        if ($input['method'] === 'delivery') {
            $order->setAddress($input['address']);
            $order->setCity($input['city']);
        }

        return $order;
    }

    public function getEntityManager()
    {
        return parent::getEntityManager();
    }
}
