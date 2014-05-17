<?php namespace JustMenu\Order\Controller;

use JustMenu\Controller\BaseController;
use JustMenu\Mailer\MailerInterface;
use JustMenu\Repository\Order\OrderRepositoryInterface;

class OrderController extends BaseController
{
    protected $mailer;

    protected $repository;

    public function __construct(MailerInterface $mailer, OrderRepositoryInterface $repository)
    {
        $this->mailer = $mailer;
        $this->repository = $repository;
    }

    public function placeOrder()
    {
        $order                       = $this->repository->create();
        $order->name                 = $this->request->request->get('name');
        $order->phone_number         = $this->request->request->get('phone');
        $order->email                = $this->request->request->get('email');
        $order->address              = $this->request->request->get('address');
        $order->city                 = $this->request->request->get('city');
        $order->special_instructions = $this->request->request->get('instructions');
        $order->method               = $this->request->request->get('method');
        $order->payment_method       = $this->request->request->get('paymentmethod');

        $json = array();

        // validate the order
        if (true || !$order->isValid()) {
            $json['success'] = false;
        } else {
            $json['success'] = true;

            $this->mailer->send($order->email, 'Order Placed', "An order has been placed. The name is {$order->name}.");
        }


        $this->sendJsonResponse(json_encode($json));
    }
}
