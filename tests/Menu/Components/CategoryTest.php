<?php

use Mockery as m;
use JustMenu\Menu\Components\Category;


class CategoryTest extends TestCase {

	public function setUp()
	{
		$this->category = new Category;
	}

	public function testGetAllSizes(){
		$this->category->addSize(2.55, 'small', 'Sm.');
		$this->category->addSize(5.00, 'large', 'Lg.');

		$this->assertSame(array('small', 'large'), $this->category->getAllSizes());
	}

	public function testGetAllShortSizes(){
		$this->category->addSize(2.55, 'small', 'Sm.');
		$this->category->addSize(5.00, 'large', 'Lg.');

		$this->assertSame(array('Sm.', 'Lg.'), $this->category->getAllShortSizes());
	}

	public function testGetAllShortSizesWithAbbreviated(){
		$this->category->addSize(2.55, 'small', 'Sm.');
		$this->category->addSize(5.00, 'large');

		$this->assertSame(array('Sm.', 'Lg.'), $this->category->getAllShortSizes());
	}

}
