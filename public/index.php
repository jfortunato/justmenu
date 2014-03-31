<?php

// bootstrap the application
require_once '../bootstrap/bootstrap.php';

$cart = $container['cart'];

?>
<!DOCTYPE html>
<html ng-app="justmenuApp">
    <head>
        <title>JustMenu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <!--<link rel="stylesheet" href="assets/lib/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="assets/compiled/justmenu.min.css" />
    </head>
    <body>

        <div id="justmenu-container" ng-controller="JustMenuController">
            <div ng-view></div>
            <?= $cart->render() ?>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
        <script src="assets/angular/angular-route.min.js"></script>
        <script src="assets/angular/angular-resource.min.js"></script>
        <script src="assets/angular/app.js"></script>
        <script src="assets/angular/controllers.js"></script>
        <script src="assets/angular/services.js"></script>
        <!--<script src="assets/compiled/justmenu.min.js" type="text/javascript" charset="utf-8"></script>-->
    </body>
</html>
