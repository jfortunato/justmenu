<?php

use Mockery as m;
use JustMenu\Menu\Entity\Item;
use JustMenu\Menu\Entity\Category;

class ItemTest extends TestCase {

	public function setUp()
	{
		$this->category = m::mock('JustMenu\Menu\Entity\Category');
		$this->item = new Item($this->category);
	}

	public function testCanRetrieveParentCategory(){
		$this->assertSame($this->category, $this->item->category());
	}

	public function testCanGetPriceFromCategorySize(){
		$mockSize = m::mock('JustMenu\Menu\Entity\Size');
		$this->category
			->shouldReceive('getSizes')
			->once()
			->andReturn(array($mockSize));

		$mockSize->size = 'small';
		$mockSize->price = 1.99;

		$this->assertSame(1.99, $this->item->getPrice('small'));
	}

	public function testCanOverrideCategoryPrice(){
		$this->category->shouldReceive('getSizes')->never();
		$this->item->addSize(m::mock('JustMenu\Menu\Entity\Size', array(2.50, 'small', 'Sm.')));

		$this->assertSame(2.50, $this->item->getPrice('small'));
	}
}
