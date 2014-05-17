<?php namespace JustMenu\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseController
{
    protected $request;

    protected $response;

    /**
     * Sets the value of request
     *
     * @param request $request description
     *
     * @return BaseController
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Sets the value of response
     *
     * @param response $response description
     *
     * @return BaseController
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
        return $this;
    }
}
