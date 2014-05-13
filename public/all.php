<?php

// bootstrap the application
require_once '../bootstrap/bootstrap.php';

$builder = $container['menu_builder'];
$builder->build();
$menu = $builder->getMenu();

$serializer = JMS\Serializer\SerializerBuilder::create()
    ->addMetadataDir(PROJECT_ROOT . '/database/yaml/serializer')
    ->addDefaultHandlers()
    ->build();
$menu = $serializer->serialize($menu, 'json');

header('Content-Type: application/json');
echo $menu;
