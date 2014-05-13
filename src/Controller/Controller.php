<?php namespace JustMenu\Controller;

use Symfony\Component\HttpFoundation\Request;
use JustMenu\Menu\MenuBuilder;
use Symfony\Component\HttpFoundation\Response;

class Controller
{
    protected $request;

    protected $response;

    protected $builder;

    public function __construct(Request $request, Response $response, MenuBuilder $builder)
    {
        $this->request = $request;
        $this->response = $response;
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

    /**
     * Gets the value of builder
     *
     * @return builder
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * Gets the value of response
     *
     * @return response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Gets the value of request
     *
     * @return request
     */
    public function getRequest()
    {
        return $this->request;
    }
}
