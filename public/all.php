<?php

// bootstrap the application
require_once '../bootstrap/bootstrap.php';

$builder = $container['menu_builder'];
$builder->build();
$builder->combineChoiceItems();
$menu = $builder->getMenu();

//echo '<pre>'; var_dump($menu); echo '</pre>'; die();

$serializer = JMS\Serializer\SerializerBuilder::create()
    ->addMetadataDir(PROJECT_ROOT . '/database/yaml/serializer')
    ->addDefaultHandlers()
    ->configureHandlers(function(JMS\Serializer\Handler\HandlerRegistry $registry) {
        $registry->registerSubscribingHandler(new JustMenu\Handler\ItemSizeHandler());
    })
    ->build();
$menu = $serializer->serialize($menu, 'json');

header('Content-Type: application/json');
echo $menu;
