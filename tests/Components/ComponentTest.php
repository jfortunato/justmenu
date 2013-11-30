<?php

use \Mockery as m;

class ComponentTest extends PHPUnit_Framework_TestCase {

	public function setUp(){
		$this->component = $this->getMockForAbstractClass('JustMenu\Components\Component');
	}

	public function tearDown(){
		m::close();
	}

	public function testCanAddComponent(){
		$component1 = m::mock('JustMenu\Components\Component');
		$component2 = m::mock('JustMenu\Components\Component');

		$this->component->add($component1);
		$this->component->add($component2);

		$this->assertCount(2, $this->component->components);
	}

	public function testCanRemoveComponent(){
		$component1 = m::mock('JustMenu\Components\Component');
		$component2 = m::mock('JustMenu\Components\Component');
		$this->component->add($component1);
		$this->component->add($component2);

		$this->assertContains($component1, $this->component->components);
		$this->assertContains($component2, $this->component->components);
		$this->assertCount(2, $this->component->components);

		$this->component->remove($component1);

		$this->assertContains($component2, $this->component->components);
		$this->assertNotContains($component1, $this->component->components);
		$this->assertCount(1, $this->component->components);
	}

}
