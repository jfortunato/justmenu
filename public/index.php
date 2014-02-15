<?php

// bootstrap the application
require_once '../bootstrap/bootstrap.php';

$builder = $container['menu_builder'];
$menu = $builder->build();
$view = $menu->render();

$cart = $container['cart'];
$view = $cart->render() . $view;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>JustMenu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <!--<link rel="stylesheet" href="assets/lib/css/bootstrap.min.css">-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?= $view; ?>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="assets/lib/js/jquery.js"></script>-->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!--<script src="assets/lib/js/bootstrap.min.js"></script>-->

        <script src="assets/js/helpers.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/optionbox.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/storage.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/cart.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/template.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/view.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/controller.js" type="text/javascript" charset="utf-8"></script>
        <script src="assets/js/app.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>
