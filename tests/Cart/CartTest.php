<?php namespace JustMenu\Tests\Cart;

use Mockery as m;
use JustMenu\Cart\Cart;
use JustMenu\Tests\TestCase;

class CartTest extends TestCase
{
    public function testCanRenderCart()
    {
        $mockViewFinder = m::mock('JustMenu\View\ViewFinder');
        $mockViewFinder->shouldReceive('fetch')->once()->andReturn('<div>cart</div>');
        $cart = new Cart($mockViewFinder);

        $this->assertSame('<div>cart</div>', $cart->render());
    }
}
