<?php

use \Mockery as m;

class ItemTest extends PHPUnit_Framework_TestCase {

	public function tearDown(){
		m::close();
	}

	public function testCanRetrieveParentCategory(){
		$category = new JustMenu\Components\Category;
		$category->title = 'First Category';

		$item = new JustMenu\Components\Item;

		$category->add($item);
		$this->assertSame($category, $item->category());
	}

	public function testCanGetPriceFromCategorySize(){
		$category = new JustMenu\Components\Category;
		$category->addSize(1.99, 'small', 'Sm.');

		$item = new JustMenu\Components\Item;

		$category->add($item);
		$this->assertSame(1.99, $item->getPrice('small'));
	}

	public function testCanOverrideCategoryPrice(){
		$category = new JustMenu\Components\Category;
		$category->addSize(1.99, 'small', 'Sm.');

		$item = new JustMenu\Components\Item;
		$item->addSize(2.50, 'small', 'Sm.');

		$category->add($item);
		$this->assertSame(2.50, $item->getPrice('small'));
	}
}
