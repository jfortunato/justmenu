<?php

namespace JustMenu\Order\Presenter;

use JustMenu\Order\Entity\Order;
use JustMenu\View\ViewFinder;

class OrderPresenter implements OrderPresenterInterface
{
    protected $finder;

    protected $order;

    public function __construct(ViewFinder $finder)
    {
        $this->finder = $finder;
    }

    public function setOrder(Order $order)
    {
        $this->order = $order;
    }

    public function render($template)
    {
        return $this->finder->fetch($template, array('order' => $this->order));
    }
}
