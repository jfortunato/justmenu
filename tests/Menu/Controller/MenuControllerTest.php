<?php

use JustMenu\Tests\TestCase;
use Mockery as m;
use JustMenu\Menu\Controller\MenuController;

class MenuControllerTest extends TestCase
{
    public function setUp()
    {
        $this->builder = m::mock('JustMenu\Menu\Builder\MenuBuilderInterface');
        $this->response = m::mock('Symfony\Component\HttpFoundation\Response');
        $this->request = m::mock('Symfony\Component\HttpFoundation\Request');

        $this->controller = new MenuController($this->builder);

        $this->controller
            ->setResponse($this->response)
            ->setRequest($this->request);
    }

    public function testCanInitialize()
    {
        $this->assertInstanceOf('JustMenu\Menu\Controller\MenuController', $this->controller);
    }

    public function testCanOutputMenuAsJSONAndCorrectHeadersSent()
    {
        $this->builder->shouldReceive('build')
            ->once();
        $this->builder->shouldReceive('getMenu')
            ->once()
            ->andReturn($menu = '["menu"]');

        $this->response->headers = m::mock('stdClass');
        $this->response->headers
            ->shouldReceive('set')
            ->with('Content-Type', 'application/json');
        $this->response->shouldReceive('setContent')
            ->once()
            ->with($menu);
        $this->response->shouldReceive('prepare')
            ->once()
            ->with($this->request);
        $this->response->shouldReceive('send')
            ->once();

        $this->controller->menu();
    }
}
