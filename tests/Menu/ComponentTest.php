<?php

use Mockery as m;

class MenuComponentTest extends TestCase {

	public function testTrue()
	{
		$this->assertTrue(true);

	}


	//public function setUp(){
		//$this->component = $this->getMockForAbstractClass('JustMenu\Menu\Components\MenuComponent');
	//}

	//public function testCanAddComponent(){
		//$component1 = m::mock('JustMenu\Menu\Components\MenuComponent');
		//$component2 = m::mock('JustMenu\Menu\Components\MenuComponent');

		//$this->component->add($component1);
		//$this->component->add($component2);

		//$this->assertCount(2, $this->component->components);
	//}

	//public function testCanRemoveComponent(){
		//$component1 = m::mock('JustMenu\Menu\Components\MenuComponent');
		//$component2 = m::mock('JustMenu\Menu\Components\MenuComponent');
		//$this->component->add($component1);
		//$this->component->add($component2);

		//$this->assertContains($component1, $this->component->components);
		//$this->assertContains($component2, $this->component->components);
		//$this->assertCount(2, $this->component->components);

		//$this->component->remove($component1);

		//$this->assertContains($component2, $this->component->components);
		//$this->assertNotContains($component1, $this->component->components);
		//$this->assertCount(1, $this->component->components);
	//}

	//public function testCanAddSize(){
		//$mockSize = m::mock('JustMenu\Menu\Components\Size', array(1.99, 'small', 'Sm.'));
		//$this->component->addSize($mockSize);

		//$size[0] = $mockSize;

		//$this->assertSame($size, $this->component->getSizes());
	//}

	//public function testCanGetSizesOfParentComponentIfCurrentDoesntHaveSize()
	//{
		//$component1 = $this->getMockForAbstractClass('JustMenu\Menu\Components\MenuComponent');
		//$component1->add($this->component);

		//$mockSize = m::mock('JustMenu\Menu\Components\Size', array(3.00, 'small', 'Sm.'));
		//$component1->addSize($mockSize);

		//$size[0] = $mockSize;

		//$this->assertSame($size, $this->component->getSizes());
	//}


}
