<?php

use \Mockery as m;

class MenuTest extends TestCase {

	public function testDisplayDelegatesToCategory(){
		$category1 = m::mock('JustMenu\Menu\Components\Category');
		$category1->shouldReceive('display')->once();

		$menu = new JustMenu\Menu\Components\Menu;
		$menu->add($category1);
		$menu->display();
	}
}
