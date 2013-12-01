<?php

use \Mockery as m;
use JustMenu\Helpers\Abbreviator;

class AbbreviatorTest extends PHPUnit_Framework_TestCase {

	public function tearDown(){
		m::close();
	}

	public function testAbbreviatorReturnsCorrectAbbreviations(){
		$this->assertSame('Sm.', Abbreviator::abbreviate('small'));
		$this->assertSame('Pt.', Abbreviator::abbreviate('pint'));
	}

	public function testAbbreviateReturnsEmptyWhenNoMatch(){
		$this->assertSame('', Abbreviator::abbreviate('foo'));
	}

	public function testUnabbreviateReturnsCorrectSize(){
		$this->assertSame('small', Abbreviator::unabbreviate('Sm.'));
		$this->assertSame('pint', Abbreviator::unabbreviate('Pt.'));
	}

	public function testUnabbreviateReturnsEmptyWhenNoMatch(){
		$this->assertSame('', Abbreviator::unabbreviate('foo'));
	}

}
