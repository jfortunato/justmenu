<?php namespace JustMenu\Tests\Config;

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Config\Config;

class ConfigTest extends TestCase
{
    public function testCanGetConfigParameterWithDotNotation()
    {
        $params = array('parameters' => array('foo' => 'bar'));

        $config = new Config($params);

        $this->assertSame('bar', $config->get('parameters.foo'));
    }

    public function testCanGetMultipleLevelsDeep()
    {
        $params = array('parameters' => array('foo' => array('bar' => 'baz')));

        $config = new Config($params);

        $this->assertSame('baz', $config->get('parameters.foo.bar'));
    }

}
