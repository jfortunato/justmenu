<?php namespace JustMenu\Tests\Menu\Presenter;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Presenter\HTMLMenuPresenter;

class HTMLMenuPresenterTest extends TestCase
{
    public function setUp()
    {
        $this->presenter = new HTMLMenuPresenter(m::mock('JustMenu\View\ViewFinder'));

        $this->mockItem = m::mock('JustMenu\Menu\Entity\Item', array('hasChoice' => false, 'getAllPrices' => 'foo'));

        $this->mockCategory = m::mock('JustMenu\Menu\Entity\Category', array('hasSpecialTime' => false, 'getAllShortSizes' => 'foo', 'getChildrenComponents' => array()));

        $this->mockMenu = m::mock('JustMenu\Menu\Menu', array('getChildrenComponents' => array()));
    }

    public function testProperlySetsDataOnItem()
    {
        $this->presenter->setComponent($this->mockItem);

        $data = array(
            'id' => null,
            'title' => null,
            'description' => null,
            'info' => null,
            'availability' => 'available',
            'prices' => 'foo',
            'isChoice' => false,
        );

        $this->presenter->getViewFinder()->shouldReceive('fetch')
            ->with(PROJECT_ROOT.'views/html/item.html', $data)
            ->once()
            ->andReturn('foo');

        $this->assertSame('foo', $this->presenter->renderItem());
    }

    public function testProperlySetsDataOnCategory()
    {
        $this->presenter->setComponent($this->mockCategory);

        $data = array(
            'id' => null,
            'title' => null,
            'description' => null,
            'special_times' => '',
            'info' => null,
            'sizes' => 'foo',
            'items' => '',
        );

        $this->presenter->getViewFinder()->shouldReceive('fetch')
            ->with(PROJECT_ROOT.'views/html/category.html', $data)
            ->once()
            ->andReturn('foo');

        $this->assertSame('foo', $this->presenter->renderCategory());
    }

    public function testProperlySetsDataOnMenu()
    {
        $this->presenter->setComponent($this->mockMenu);

        $data = array(
            'categories' => '',
        );

        $this->presenter->getViewFinder()->shouldReceive('fetch')
            ->with(PROJECT_ROOT.'views/html/menu.html', $data)
            ->once()
            ->andReturn('foo');

        $this->assertSame('foo', $this->presenter->renderMenu());
    }


    //public function testCanRenderCategoryWithNoItems()
    //{
        //$this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        //$this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());

        //$this->presenter->setComponent($this->mockCategory);

        //$this->assertNotEmpty($this->presenter->renderCategory());
    //}

    //public function testCanRenderCategoryWithItems()
    //{
        //$this->mockItem->shouldReceive('render')->once()->andReturn('<div data-item="1"></div>');
        //$this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
        //$this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array($this->mockItem));

        //$this->presenter->setComponent($this->mockCategory);
        //$rendered = $this->presenter->renderCategory();

        //$this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        //$this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
    //}

    //public function testCanProperlyRenderMenuWithAttributes()
    //{
        //$this->mockMenu->shouldReceive('getChildrenComponents')->once()->andReturn(array());
        //$this->presenter->setComponent($this->mockMenu);

        //$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $this->presenter->renderMenu());
    //}

    //public function testCanRenderMenuWithCategoriesAndItems()
    //{
        //$this->mockCategory->shouldReceive('render')->once()->andReturn('<div data-category="1"><div data-item="1"></div></div>');
        //$this->mockMenu->shouldReceive('getChildrenComponents')->once()->andReturn(array($this->mockCategory));

        //$this->presenter->setComponent($this->mockMenu);
        //$rendered = $this->presenter->renderMenu();

        //$this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $rendered);
        //$this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        //$this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
    //}

    //public function testItemsWithChoiceDontGetRendered()
    //{
        //$mockItem = m::mock('JustMenu\Menu\Entity\Item');
        //$mockItem->id = 1;
        //$mockItem->choice = m::mock('JustMenu\Menu\Entity\Choice', array('getAllPrices' => [3.00]));

        //$mockItem->shouldReceive('getAllPrices')->never();
        //$mockItem->shouldReceive('hasChoice')->once()->andReturn(true);

        //$this->presenter->setComponent($mockItem);
        //$rendered = $this->presenter->renderItem();
        //$rendered = "<html>$rendered</html>";

        //$this->assertNotTag(['attributes' => ['data-item' => '1']], $rendered);
    //}

    //public function testItemsWithChoiceRendersTheSingleChoiceInstead()
    //{
        //$mockChoice = m::mock('JustMenu\Menu\Entity\Choice');
        //$mockChoice->id = 4;
        //$mockChoice->title = 'foo choice';
        //$mockChoice->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        //$mockItem1 = m::mock('JustMenu\Menu\Entity\Item');
        //$mockItem1->id = 1;
        //$mockItem1->choice = $mockChoice;
        //$mockItem1->shouldReceive('getAllPrices')->never();
        //$mockItem1->shouldReceive('hasChoice')->once()->andReturn(true);

        //$this->presenter->setComponent($mockItem1);
        //$rendered = $this->presenter->renderItem();

        //$this->assertTag(['attributes' => ['data-choice' => '4']], $rendered);
        //$this->assertTag(['attributes' => ['data-title' => 'foo choice']], $rendered);
        //$this->assertNotTag(['attributes' => ['data-item' => '1']], $rendered);
    //}

    //public function testItemsWithChoiceRendersTheFirstItemChoiceThenSkipsOthers()
    //{
        //$mockChoice = m::mock('JustMenu\Menu\Entity\Choice');
        //$mockChoice->id = 4;
        //$mockChoice->title = 'foo choice';
        //$mockChoice->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        //$mockItem1 = m::mock('JustMenu\Menu\Entity\Item');
        //$mockItem1->id = 1;
        //$mockItem1->choice = $mockChoice;
        //$mockItem1->shouldReceive('getAllPrices')->never()->andReturn([3.00]);
        //$mockItem1->shouldReceive('hasChoice')->once()->andReturn(true);

        //$mockItem2 = m::mock('JustMenu\Menu\Entity\Item');
        //$mockItem2->id = 2;
        //$mockItem2->choice = $mockChoice;
        //$mockItem2->shouldReceive('getAllPrices')->never()->andReturn([3.00]);
        //$mockItem2->shouldReceive('hasChoice')->once()->andReturn(true);

        //$this->presenter->setComponent($mockItem1);
        //$rendered = $this->presenter->renderItem();
        //$this->presenter->setComponent($mockItem2);
        //$rendered .= $this->presenter->renderItem();

        //$this->assertTag(['attributes' => ['data-choice' => '4']], $rendered);
        //$this->assertNotTag(['attributes' => ['data-item' => '1']], $rendered);
        //$this->assertNotTag(['attributes' => ['data-item' => '2']], $rendered);
    //}

    //public function testSpecialTimesIsNotRenderedWithNoCategorySpecialTimes()
    //{
        //$this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        //$this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());
        //$this->mockCategory->shouldReceive('hasSpecialTime')->once()->andReturn(false);

        //$this->presenter->setComponent($this->mockCategory);
        //$rendered = $this->presenter->renderCategory();

        //$this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        //$this->assertNotTag(['attributes' => ['data-special-times' => 'true']], $rendered);
    //}

    //public function testCategoryWithSpecialTimesRendersWithAttribute()
    //{
        //$this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        //$this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());
        //$this->mockCategory->shouldReceive('hasSpecialTime')->once()->andReturn(true);
        //$mockSpecialTime = m::mock('JustMenu\Menu\Entity\SpecialTime');
        //$mockSpecialTime->days = 0;
        //$this->mockCategory->special_time = $mockSpecialTime;

        //$this->presenter->setComponent($this->mockCategory);
        //$rendered = $this->presenter->renderCategory();
        
        //$this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        //$this->assertTag(['attributes' => ['data-special-times' => 'true']], $rendered);
    //}

    //public function testAvailabilityIsAvailableWithNoSpecialTimeForItem()
    //{
        //$this->mockItem->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        //$this->presenter->setComponent($this->mockItem);
        //$rendered = $this->presenter->renderItem();

        //$this->assertTag(['attributes' => ['data-availability' => 'available']], $rendered);
    //}

    //public function testAvailabilityIsAvailableWithWhileWithinSpecialTime()
    //{
        ////
    //}

    //public function testAvailabilityIsUnavailableWhileNotWithinSpecialTime()
    //{
        ////
    //}

}
