<?php namespace JustMenu\Menu\Controller;

use JustMenu\Controller\BaseController;
use JustMenu\Menu\Builder\MenuBuilderInterface;

class MenuController extends BaseController
{
    protected $builder;

    public function __construct(MenuBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function menu()
    {
        $this->builder->build();

        $this->response->headers->set('Content-Type', 'application/json');
        $this->response->setContent($this->builder->getMenu());
        $this->response->prepare($this->request);
        $this->response->send();
    }
}
