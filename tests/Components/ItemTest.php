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
}
