<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use JustMenu\Menu\Presenter\HTMLMenuPresenter as Presenter;
use JustMenu\Menu\MenuBuilder as Builder;
use JustMenu\Menu\DoctrineManager as Manager;
use JustMenu\View\ViewFinder;
use JustMenu\Cart\Cart;

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

$container['view_finder'] = function ($c) {
    return new ViewFinder;
};

$container['presenter'] = function ($c) {
    return new Presenter($c['view_finder']);
};

$container['menu_builder'] = function ($c) {
    return new Builder($c['manager'], $c['presenter']);
};

$container['cart'] = function ($c) {
    return new Cart($c['view_finder']);
};
