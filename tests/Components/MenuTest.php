<?php

use \Mockery as m;

class MenuTest extends PHPUnit_Framework_TestCase {

	public function tearDown(){
		m::close();
	}

	public function testDisplayDelegatesToCategory(){
		$category1 = m::mock('JustMenu\Components\Category');
		$category1->shouldReceive('display')->once();

		$menu = new JustMenu\Components\Menu;
		$menu->add($category1);
		$menu->display();
	}
}
