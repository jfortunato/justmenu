<?php namespace JustMenu\Cart;

use JustMenu\View\ViewFinder;

class Cart
{
    protected $viewFinder;

    public function __construct(ViewFinder $viewFinder)
    {
        $this->viewFinder = $viewFinder;
    }

    public function render()
    {
        return $this->viewFinder->fetch(PROJECT_ROOT.'views/html/cart.html');
    }
}
