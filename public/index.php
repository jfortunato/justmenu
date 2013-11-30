<?php

use JustMenu\Components\Menu;
use JustMenu\Components\Category;
use JustMenu\Components\Item;

// bootstrap the application
require_once '../lib/JustMenu/bootstrap.php';

$menu = new Menu();

$cat1 = new Category();
$cat1->title = 'Chow Fun';
$cat1->description = 'rice noodle';
$cat1->info = 'comes with white rice';
$cat1->sizes = array('Qt.' => 6.99);

$item1 = new Item();
$item1->title = 'Vegetable Chow Fun';
$item1->description = 'item1 descripton';
$item1->info = 'addl info';

$item2 = new Item();
$item2->title = 'Roast Pork Chow Fun';
$item2->description = 'item2 descripton';
$item2->info = 'addl info';

$cat1->add($item1);
$cat1->add($item2);
$menu->add($cat1);


$cat2 = new Category();
$cat2->title = 'Lo Mein';
$cat2->description = 'soft noodle';
$cat2->info = 'comes with soda';
$cat2->sizes = array('Pt.' => 4.45, 'Qt.' => 6.85);

$item1 = new Item();
$item1->title = 'Plain Lo Mein';
$item1->description = 'item1 descripton';
$item1->info = 'addl info';

$item2 = new Item();
$item2->title = 'Vegetable Lo Mein';
$item2->description = 'item2 descripton';
$item2->info = 'addl info';

$cat2->add($item1);
$cat2->add($item2);
$menu->add($cat2);


$menu->display();
