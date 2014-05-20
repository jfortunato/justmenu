<?php namespace JustMenu\Order\Presenter;

use JustMenu\Order\Entity\Order;

interface OrderPresenterInterface
{
    public function setOrder(Order $order);

    public function render($template);
}
