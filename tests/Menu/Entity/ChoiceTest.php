<?php namespace JustMenu\Tests\Menu\Entity;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Entity\Choice;

class ChoiceTest extends TestCase
{
    public function testCanGetAllPricesFromFirstItem()
    {
        $choice = new Choice;
        $choice->items = array($mockItem = m::mock('JustMenu\Menu\Entity\Item'));

        $mockItem->shouldReceive('getAllPrices')->once()->andReturn(array('small' => 3.99, 'large' => 5.99));

        $this->assertSame(array('small' => 3.99, 'large' => 5.99), $choice->getAllPrices());
    }

}
