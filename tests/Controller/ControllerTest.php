<?php

use JustMenu\Controller\Controller;
use JustMenu\Tests\TestCase;
use Mockery as m;


class ControllerTest extends TestCase
{
    public function setUp()
    {
        $request = m::mock('Symfony\Component\HttpFoundation\Request');
        $response = m::mock('Symfony\Component\HttpFoundation\Response');
        $builder = m::mock('JustMenu\Menu\MenuBuilder');

        $this->controller = new Controller($request, $response, $builder);
    }

    public function testCanInitialize()
    {
        $this->assertInstanceOf('JustMenu\Controller\Controller', $this->controller);
    }

    public function testCanOutputMenuAsJSONAndCorrectHeadersSent()
    {
        $builder = $this->controller->getBuilder();
        $builder->shouldReceive('build')
            ->once();
        $builder->shouldReceive('getMenu')
            ->once()
            ->andReturn($menu = '["menu"]');

        $response = $this->controller->getResponse();
        $response->headers = m::mock('stdClass');
        $response->headers
            ->shouldReceive('set')
            ->with('Content-Type', 'application/json');
        $response->shouldReceive('setContent')
            ->once()
            ->with($menu);
        $response->shouldReceive('prepare')
            ->once()
            ->with($this->controller->getRequest());
        $response->shouldReceive('send')
            ->once();

        $this->controller->menu();
    }
}
