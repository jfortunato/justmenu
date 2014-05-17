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

        $this->sendJsonResponse($this->builder->getMenu());
    }
}
