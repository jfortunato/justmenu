<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use JustMenu\Menu\Menu;
use JustMenu\Menu\Builder\MenuBuilder;
use JustMenu\Repository\Category\DoctrineCategoryRepository;
use JustMenu\Repository\Order\DoctrineOrderRepository;
use JustMenu\Menu\Controller\MenuController;
use JustMenu\Order\Controller\OrderController;
use JustMenu\Mailer\Mailer;
use Doctrine\ORM\Mapping\ClassMetadata;

$container = new Pimple();

$container['doctrine'] = function ($c) {
    $isDevMode = true;
    $config = Setup::createYAMLMetadataConfiguration(array(PROJECT_ROOT."/database/yaml"), $isDevMode);

    // database configuration parameters
    $conn = array(
        'driver' => 'pdo_sqlite',
        'path' => PROJECT_ROOT . '/database/db.sqlite',
    );

    // obtaining the entity manager
    return EntityManager::create($conn, $config);
};

$container['menu'] = function ($c)
{
    return new Menu;
};

$container['menu_builder'] = function ($c) {
    return new MenuBuilder($c['category_repository'], $c['menu'], $c['serializer']);
};

$container['category_repository'] = function ($c)
{
    $meta = new ClassMetadata('JustMenu\Menu\Entity\Category');

    return new DoctrineCategoryRepository($c['doctrine'], $meta);
};

$container['order_repository'] = function ($c)
{
    $meta = new ClassMetadata('JustMenu\Order\Entity\Order');

    return new DoctrineOrderRepository($c['doctrine'], $meta);
};

$container['menu_controller'] = function ($c)
{
    $controller = new MenuController($c['menu_builder']);

    return $controller->setRequest($c['request'])->setResponse($c['response']);
};

$container['order_controller'] = function ($c)
{
    $controller = new OrderController($c['mailer'], $c['order_repository']);

    return $controller->setRequest($c['request'])->setResponse($c['response']);
};

$container['request'] = function ($c)
{
    return Request::createFromGlobals();
};

$container['response'] = function ($c)
{
    return new Response;
};

$container['mailer'] = function ($c)
{
    return new Mailer;
};

$container['serializer'] = function ($c)
{
    return SerializerBuilder::create()
        ->addMetadataDir(PROJECT_ROOT . '/database/yaml/serializer')
        ->addDefaultHandlers()
        ->build();
};
