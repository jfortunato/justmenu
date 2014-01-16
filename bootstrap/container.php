<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use JustMenu\Menu\Presenter\HTMLMenuPresenter as Presenter;
use JustMenu\Menu\MenuBuilder as Builder;
use JustMenu\Menu\DoctrineManager as Manager;

$container = new Pimple();

$container['doctrine'] = function($c) {
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

$container['manager'] = function($c){
    return new Manager($c['doctrine']);
};

$container['menu_builder'] = function($c) {
    $presenter = new Presenter;

    return new Builder($c['manager'], $presenter);
};
