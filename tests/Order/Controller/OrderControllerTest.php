<?php

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Order\Controller\OrderController;

class OrderControllerTest extends TestCase
{
    public function setUp()
    {
        $this->mailer = m::mock('JustMenu\Mailer\MailerInterface');
        $this->repository = m::mock('JustMenu\Repository\Order\OrderRepositoryInterface');

        $this->controller = new OrderController($this->mailer, $this->repository);
    }

    public function testCanInitialize()
    {
        $this->assertInstanceOf('JustMenu\Order\Controller\OrderController', $this->controller);
    }

    public function testPlaceOrderSendsEmail()
    {
        $this->repository->shouldReceive('create')
            ->once();

        $this->mailer->shouldReceive('send')
            ->once();

        $this->controller->placeOrder();
    }

    public function testPlaceOrderCreatesNewOrder()
    {
        //$this->orderRepository->shouldReceive('create')
            //->once();

        //$this->controller->placeOrder();
    }

    public function testPlaceOrderValidatesOrder()
    {
    }

}
