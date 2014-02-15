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
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?= $view; ?>
                </div>
            </div>
        </div>

        <script src="assets/compiled/justmenu.min.js" type="text/javascript" charset="utf-8"></script>
    </body>
</html>
