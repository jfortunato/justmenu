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

    public function testCanGetJsonChoices()
    {
        $choice = new Choice;
        $choice->items = array($mockItem1 = m::mock('JustMenu\Menu\Entity\Item'), $mockItem2 = m::mock('JustMenu\Menu\Entity\Item', array('toJson' => '{}')));
        $mockItem1->shouldReceive('toJson')->once()->andReturn('{"title":"foo","description":"bar"}');

        $this->assertJsonStringEqualsJsonString('[{"title":"foo","description":"bar"},{}]', $choice->getJsonChoices());
    }
}
