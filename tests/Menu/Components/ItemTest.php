<?php

use Mockery as m;
use JustMenu\Menu\Components\Item;
use JustMenu\Menu\Components\Category;

class ItemTest extends TestCase {

	public function setUp()
	{
		$this->category = new Category;
		$this->item = new Item;
	}

	public function testCanRetrieveParentCategory(){
		$this->category->add($this->item);
		$this->assertSame($this->category, $this->item->category());
	}

	public function testCanGetPriceFromCategorySize(){
		$this->category->addSize(1.99, 'small', 'Sm.');

		$this->category->add($this->item);
		$this->assertSame(1.99, $this->item->getPrice('small'));
	}

	public function testCanOverrideCategoryPrice(){
		$this->category->addSize(1.99, 'small', 'Sm.');

		$this->item->addSize(2.50, 'small', 'Sm.');

		$this->category->add($this->item);
		$this->assertSame(2.50, $this->item->getPrice('small'));
	}
}
