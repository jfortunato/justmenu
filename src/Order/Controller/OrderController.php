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
        $order = $this->repository->create();

        $this->mailer->send();
    }
}
