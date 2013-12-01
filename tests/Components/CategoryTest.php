<?php

use \Mockery as m;

class CategoryTest extends PHPUnit_Framework_TestCase {

	public function tearDown(){
		m::close();
	}

	public function testGetAllSizes(){
		$category = new JustMenu\Components\Category;
		$category->addSize(2.55, 'small', 'Sm.');
		$category->addSize(5.00, 'large', 'Lg.');

		$this->assertSame(array('small', 'large'), $category->getAllSizes());
	}

}
