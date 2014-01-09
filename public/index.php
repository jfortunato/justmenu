<?php

use JustMenu\Menu\Components\Menu;
use JustMenu\Menu\Components\Category;
use JustMenu\Menu\Components\Item;

// bootstrap the application
require_once '../src/JustMenu/bootstrap.php';

$menu = new Menu();

$cat1 = new Category();
$cat1->title = 'Chow Fun';
$cat1->description = 'rice noodle';
$cat1->info = 'comes with white rice';
$cat1->addSize(6.99, 'quart', 'Qt.');

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
$cat2->addSize(4.45, 'pint', 'Pt.');
$cat2->addSize(6.85, 'quart', 'Qt.');

$item1 = new Item();
$item1->title = 'Plain Lo Mein';
$item1->description = 'item1 descripton';
$item1->info = 'addl info';

$item2 = new Item();
$item2->title = 'Vegetable Lo Mein';
$item2->description = 'item2 descripton';
$item2->info = 'addl info';
$item2->addSize(5.30, 'pint', 'Pt.');

$cat2->add($item1);
$cat2->add($item2);
$menu->add($cat2);

$view = new JustMenu\Menu\HTMLMenuPresenter($menu);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>JustMenu</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Just<strong>Menu</strong></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?= $view->render(); ?>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	</body>
</html>

