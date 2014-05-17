<?php namespace JustMenu\Tests\Menu;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Builder\MenuBuilder;

class MenuBuilderTest extends TestCase
{
    public function setUp()
    {
        $this->repository = m::mock('JustMenu\Repository\Category\CategoryRepositoryInterface');
        $this->menu = m::mock('JustMenu\Menu\Menu');
        $this->serializer = m::mock('JMS\Serializer\Serializer');

        $this->builder = new MenuBuilder($this->repository, $this->menu, $this->serializer);
    }

    public function testBuildReturnsMenuWrappedWithPresenter()
    {
        //$this->builder->getManager()
            //->shouldReceive('assembleCategoriesByIndex')
            //->once()
            //->andReturn(array(m::mock('JustMenu\Menu\Entity\Category'), m::mock('JustMenu\Menu\Entity\Category')));

        //$this->builder->getMenu()
            //->shouldReceive('addCategory')
            //->twice();

        //$this->builder->getMenuPresenter()
            //->shouldReceive('setComponent')
            //->once()
            //->with($this->builder->getMenu())
            //->andReturn('wrapped_menu');

        //$this->assertSame('wrapped_menu', $this->builder->build());
    }

    public function testCanCombineChoicesIntoASingleItem()
    {
        //$mockMenu = m::mock('JustMenu\Menu\Menu');

        //$mockCategory = m::mock('JustMenu\Menu\Entity\Category');
        //$mockCategory->items = array(m::mock('JustMenu\Menu\Entity\Item'), m::mock('JustMenu\Menu\Entity\Item'));

        //$mockMenu->addCategory($mockCategory);

        //$this->builder->setMenu($mockMenu);
        //$this->builder->combineChoiceItems();
        //$count = $this->builder->getMenu()->getCategories()->items;

        //$this->assertCount(1, $count);
    }

    public function testBuildSerializesMenu()
    {
        $this->repository->shouldReceive('getCategoriesByOrder')
            ->once()
            ->andReturn(array());

        $this->menu
            ->shouldReceive('getCategories')
            ->andReturn(array());

        $this->serializer
            ->shouldReceive('serialize')
            ->once()
            ->with($this->menu, 'json')
            ->andReturn('["menu"]');

        $this->builder->build();
    }
}
