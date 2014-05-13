<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use JustMenu\Menu\MenuBuilder as Builder;
use JustMenu\Menu\DoctrineManager as Manager;
use JustMenu\Menu\Menu;

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
    return new Builder($c['manager'], $c['menu']);
};
