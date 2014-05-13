<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use JustMenu\Menu\MenuBuilder as Builder;
use JustMenu\Menu\DoctrineManager as Manager;
use JustMenu\Menu\Menu;
use JustMenu\Controller\Controller;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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

$container['manager'] = function ($c) {
    return new Manager($c['doctrine']);
};

$container['menu'] = function ($c)
{
    return new Menu;
};

$container['menu_builder'] = function ($c) {
    return new Builder($c['manager'], $c['menu'], $c['serializer']);
};

$container['controller'] = function ($c)
{
    return new Controller($c['request'], $c['response'], $c['menu_builder']);
};

$container['request'] = function ($c)
{
    return Request::createFromGlobals();
};

$container['response'] = function ($c)
{
    return new Response;
};

$container['serializer'] = function ($c)
{
    return SerializerBuilder::create()
        ->addMetadataDir(PROJECT_ROOT . '/database/yaml/serializer')
        ->addDefaultHandlers()
        ->build();
};
