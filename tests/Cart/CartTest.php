<?php namespace JustMenu\Tests\Cart;

use JustMenu\Cart\Cart;
use JustMenu\Tests\TestCase;

class CartTest extends TestCase
{
    public function testCanRenderCart()
    {
        $cart = new Cart;

        $this->assertSame('<div>cart</div>', $cart->render());
    }
}
