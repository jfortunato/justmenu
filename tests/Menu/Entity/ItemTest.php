<?php namespace JustMenu\Tests\Menu\Entity;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Entity\Item;

class ItemTest extends TestCase
{
    public function setUp()
    {
        $this->item = new Item;
        $this->item->category = m::mock('JustMenu\Menu\Entity\Category');
    }

    public function testCanRetrieveParentCategory()
    {
        $this->assertSame($this->item->category, $this->item->category());
    }

    public function testCanAddSize()
    {
        $this->assertCount(0, $this->item->sizes);

        $this->item->addSize(m::mock('JustMenu\Menu\Entity\Size'));

        $this->assertCount(1, $this->item->sizes);
    }

    public function testCanGetSizesFromSelf()
    {
        $this->item->sizes = array(m::mock('JustMenu\Menu\Entity\Size'));

        $this->item->category->shouldReceive('getSizes')->never();

        $this->assertSame($this->item->sizes, $this->item->getSizes());
    }

    public function testCanGetSizesFromCategory()
    {
        $this->assertCount(0, $this->item->sizes);

        $this->item->category->shouldReceive('getSizes')
            ->once()
            ->andReturn($sizes = array(m::mock('JustMenu\Menu\Entity\Size')));

        $this->assertSame($sizes, $this->item->getSizes());
    }

    public function testCanGetDefaultPriceFromCategory()
    {
        $this->item->category
            ->shouldReceive('getSizes')
            ->once()
            ->andReturn(array($size = m::mock('JustMenu\Menu\Entity\Size')));

        $size->size = 'small';
        $size->price = 1.99;

        $this->assertSame(1.99, $this->item->getPrice('small'));
    }

    public function testCanOverrideCategoryPrice()
    {
        $this->item->category->shouldReceive('getSizes')->never();
        $this->item->addSize(m::mock('JustMenu\Menu\Entity\Size', array(2.50, 'small', 'Sm.')));

        $this->assertSame(2.50, $this->item->getPrice('small'));
    }

    public function testCanGetAllPricesFromCategory()
    {
        $this->item->category->shouldReceive('getAllLongSizes')
            ->once()
            ->andReturn(array('small', 'large'));

        $this->item->category->shouldReceive('getSizes')
            ->twice()
            ->andReturn(array($size1 = m::mock('JustMenu\Menu\Entity\Size'), $size2 = m::mock('JustMenu\Menu\Entity\Size')));
        $size1->size = 'small';
        $size1->price = 2.50;
        $size2->size = 'large';
        $size2->price = 4.00;

        $this->assertSame(array('small' => 2.50, 'large' => 4.00), $this->item->getAllPrices());
    }

    public function testCanGetAllPricesFromItem()
    {
        $size1 = m::mock('JustMenu\Menu\Entity\Size');
        $size1->size = 'small';
        $size1->price = 3.99;
        $size2 = m::mock('JustMenu\Menu\Entity\Size');
        $size2->size = 'large';
        $size2->price = 5.99;

        $this->item->addSize($size1);
        $this->item->addSize($size2);

        $this->item->category->shouldReceive('getAllLongSizes')
            ->once()
            ->andReturn(array('small', 'large'));

        $this->assertSame(array('small' => 3.99, 'large' => 5.99), $this->item->getAllPrices());
    }

    public function testCanGetAllPricesFromMixed()
    {
        $size1 = m::mock('JustMenu\Menu\Entity\Size');
        $size1->size = 'small';
        $size1->price = 3.99;

        $this->item->addSize($size1);

        $this->item->category->shouldReceive('getAllLongSizes')
            ->once()
            ->andReturn(array('small', 'large'));

        $this->item->category->shouldReceive('getSizes')
            ->once()
            ->andReturn(array($size2 = m::mock('JustMenu\Menu\Entity\Size')));
        $size2->size = 'large';
        $size2->price = 4.00;

        $this->assertSame(array('small' => 3.99, 'large' => 4.00), $this->item->getAllPrices());
    }

    public function testChildrenComponentsIsEmpty()
    {
        $this->assertSame(array(), $this->item->getChildrenComponents());
    }

    public function testHasChoice()
    {
        $this->assertFalse($this->item->hasChoice());

        $this->item->choice = m::mock('JustMenu\Menu\Entity\Choice');

        $this->assertTrue($this->item->hasChoice());
    }

    public function testCanRenderItem()
    {
        $mockPresenter = m::mock('JustMenu\Menu\Presenter\MenuPresenter');
        $mockPresenter->shouldReceive('renderItem')->once();

        $this->item->render($mockPresenter);
    }

    public function testHasSpecialTimeReturnsFalseWithNoSpecailTime()
    {
        $this->assertFalse($this->item->hasSpecialTime());
    }

    public function testHasSpecialTimeReturnsTrueWithSpecialTime()
    {
        $mockSpecialTime = m::mock('JustMenu\Menu\Entity\SpecialTime');
        $this->item->special_time = $mockSpecialTime;

        $this->assertTrue($this->item->hasSpecialTime());
    }

    public function testCanTransformToJson()
    {
        $this->item->id = '1';
        $this->item->title = 'foo';
        $this->item->description = 'bar';
        $this->item->info = 'baz';
        $this->assertJsonStringEqualsJsonString('{"id":"1","title":"foo","description":"bar","info":"baz"}', $this->item->toJson());
    }
}
