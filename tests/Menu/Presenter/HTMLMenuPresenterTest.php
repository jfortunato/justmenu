<?php namespace JustMenu\Tests\Menu\Presenter;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Presenter\HTMLMenuPresenter;

class HTMLMenuPresenterTest extends TestCase
{
    public function setUp()
    {
        $this->mockItem = m::mock('JustMenu\Menu\Entity\Item', array('hasChoice' => false));
        $this->mockItem->id = '1';
        $this->mockItem->title = 'foo';
        $this->mockItem->description = 'bar';
        $this->mockItem->info = 'baz';

        $this->mockCategory = m::mock('JustMenu\Menu\Entity\Category', array('hasSpecialTime' => false));
        $this->mockCategory->id = '1';
        $this->mockCategory->title = 'foo';
        $this->mockCategory->description = 'bar';
        $this->mockCategory->info = 'baz';

        $this->mockMenu = m::mock('JustMenu\Menu\Menu');
    }

    public function testRenderProperlyRendersItemWithAttributes()
    {
        $this->mockItem->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        $presenter = new HTMLMenuPresenter($this->mockItem);
        $rendered = $presenter->renderItem();

        $this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
        $this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
        $this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
        $this->assertTag(['attributes' => ['data-price' => '3.00']], $rendered);
    }

    public function testRenderProperlyRendersCategoryWithAttributes()
    {
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        $this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());

        $presenter = new HTMLMenuPresenter($this->mockCategory);
        $rendered = $presenter->renderCategory();

        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-title' => 'foo']], $rendered);
        $this->assertTag(['attributes' => ['data-description' => 'bar']], $rendered);
        $this->assertTag(['attributes' => ['data-info' => 'baz']], $rendered);
        $this->assertTag(['attributes' => ['data-size' => 'lg.']], $rendered);
    }

    public function testCanRenderCategoryWithNoItems()
    {
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        $this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());

        $presenter = new HTMLMenuPresenter($this->mockCategory);

        $this->assertNotEmpty($presenter->renderCategory());
    }

    public function testCanRenderCategoryWithItems()
    {
        $this->mockItem->shouldReceive('render')->once()->andReturn('<div data-item="1"></div>');
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg']);
        $this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array($this->mockItem));

        $presenter = new HTMLMenuPresenter($this->mockCategory);
        $rendered = $presenter->renderCategory();

        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
    }

    public function testCanProperlyRenderMenuWithAttributes()
    {
        $this->mockMenu->shouldReceive('getChildrenComponents')->once()->andReturn(array());
        $presenter = new HTMLMenuPresenter($this->mockMenu);

        $this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $presenter->renderMenu());
    }

    public function testCanRenderMenuWithCategoriesAndItems()
    {
        $this->mockCategory->shouldReceive('render')->once()->andReturn('<div data-category="1"><div data-item="1"></div></div>');
        $this->mockMenu->shouldReceive('getChildrenComponents')->once()->andReturn(array($this->mockCategory));

        $presenter = new HTMLMenuPresenter($this->mockMenu);
        $rendered = $presenter->renderMenu();

        $this->assertTag(['attributes' => ['data-justmenu' => 'justmenu']], $rendered);
        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-item' => '1']], $rendered);
    }

    public function testItemsWithChoiceDontGetRendered()
    {
        $mockItem = m::mock('JustMenu\Menu\Entity\Item');
        $mockItem->id = 1;
        $mockItem->choice = m::mock('JustMenu\Menu\Entity\Choice', array('getAllPrices' => [3.00]));

        $mockItem->shouldReceive('getAllPrices')->never();
        $mockItem->shouldReceive('hasChoice')->once()->andReturn(true);

        $presenter = new HTMLMenuPresenter($mockItem);
        $rendered = $presenter->renderItem();
        $rendered = "<html>$rendered</html>";

        $this->assertNotTag(['attributes' => ['data-item' => '1']], $rendered);
    }

    public function testItemsWithChoiceRendersTheSingleChoiceInstead()
    {
        $mockChoice = m::mock('JustMenu\Menu\Entity\Choice');
        $mockChoice->id = 4;
        $mockChoice->title = 'foo choice';
        $mockChoice->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        $mockItem1 = m::mock('JustMenu\Menu\Entity\Item');
        $mockItem1->id = 1;
        $mockItem1->choice = $mockChoice;
        $mockItem1->shouldReceive('getAllPrices')->never();
        $mockItem1->shouldReceive('hasChoice')->once()->andReturn(true);

        $presenter = new HTMLMenuPresenter($mockItem1);
        $rendered = $presenter->renderItem();

        $this->assertTag(['attributes' => ['data-choice' => '4']], $rendered);
        $this->assertTag(['attributes' => ['data-title' => 'foo choice']], $rendered);
        $this->assertNotTag(['attributes' => ['data-item' => '1']], $rendered);
    }

    public function testItemsWithChoiceRendersTheFirstItemChoiceThenSkipsOthers()
    {
        $mockChoice = m::mock('JustMenu\Menu\Entity\Choice');
        $mockChoice->id = 4;
        $mockChoice->title = 'foo choice';
        $mockChoice->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        $mockItem1 = m::mock('JustMenu\Menu\Entity\Item');
        $mockItem1->id = 1;
        $mockItem1->choice = $mockChoice;
        $mockItem1->shouldReceive('getAllPrices')->never()->andReturn([3.00]);
        $mockItem1->shouldReceive('hasChoice')->once()->andReturn(true);

        $mockItem2 = m::mock('JustMenu\Menu\Entity\Item');
        $mockItem2->id = 2;
        $mockItem2->choice = $mockChoice;
        $mockItem2->shouldReceive('getAllPrices')->never()->andReturn([3.00]);
        $mockItem2->shouldReceive('hasChoice')->once()->andReturn(true);

        $presenter = new HTMLMenuPresenter($mockItem1);
        $rendered = $presenter->renderItem();
        $presenter->setComponent($mockItem2);
        $rendered .= $presenter->renderItem();

        $this->assertTag(['attributes' => ['data-choice' => '4']], $rendered);
        $this->assertNotTag(['attributes' => ['data-item' => '1']], $rendered);
        $this->assertNotTag(['attributes' => ['data-item' => '2']], $rendered);
    }

    public function testSpecialTimesIsNotRenderedWithNoCategorySpecialTimes()
    {
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        $this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());
        $this->mockCategory->shouldReceive('hasSpecialTime')->once()->andReturn(false);

        $presenter = new HTMLMenuPresenter($this->mockCategory);
        $rendered = $presenter->renderCategory();

        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertNotTag(['attributes' => ['data-special-times' => 'true']], $rendered);
    }

    public function testCategoryWithSpecialTimesRendersWithAttribute()
    {
        $this->mockCategory->shouldReceive('getAllShortSizes')->once()->andReturn(['lg.']);
        $this->mockCategory->shouldReceive('getChildrenComponents')->once()->andReturn(array());
        $this->mockCategory->shouldReceive('hasSpecialTime')->once()->andReturn(true);
        $mockSpecialTime = m::mock('JustMenu\Menu\Entity\SpecialTime');
        $mockSpecialTime->days = 0;
        $this->mockCategory->special_time = $mockSpecialTime;

        $presenter = new HTMLMenuPresenter($this->mockCategory);
        $rendered = $presenter->renderCategory();
        
        $this->assertTag(['attributes' => ['data-category' => '1']], $rendered);
        $this->assertTag(['attributes' => ['data-special-times' => 'true']], $rendered);
    }

    public function testAvailabilityIsAvailableWithNoSpecialTimeForItem()
    {
        $this->mockItem->shouldReceive('getAllPrices')->once()->andReturn([3.00]);

        $presenter = new HTMLMenuPresenter($this->mockItem);
        $rendered = $presenter->renderItem();

        $this->assertTag(['attributes' => ['data-availability' => 'available']], $rendered);
    }

    public function testAvailabilityIsAvailableWithWhileWithinSpecialTime()
    {
        //
    }

    public function testAvailabilityIsUnavailableWhileNotWithinSpecialTime()
    {
        //
    }

}
