<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\HttpFoundation\Request;

// bootstrap the application
require_once '../bootstrap/bootstrap.php';

$locator = new FileLocator(array(PROJECT_ROOT . '/config'));
$loader = new YamlFileLoader($locator);
$routes = $loader->load('routes.yml');

$request = $container['request'];
$context = new RequestContext;
$context->fromRequest($request);

$matcher = new UrlMatcher($routes, $context);

$parameters = $matcher->match($request->getRequestUri());

$controller = $container['controller'];
//$controller = new $parameters['_controller'];
$controller->$parameters['_route']();
