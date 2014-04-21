<?php

// bootstrap the application
require_once '../bootstrap/bootstrap.php';

$cart = $container['cart'];

?>
<!DOCTYPE html>
<html ng-app="justmenu">
    <head>
        <title>JustMenu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/compiled/justmenu.min.css" />
    </head>
    <body>

        <div id="justmenu-container">
            <div ng-controller="MenuController">
                <div ng-view></div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
        <script src="assets/angular/angular-route.min.js"></script>
        <script src="assets/angular/angular-resource.min.js"></script>
        <script src="assets/angular/angular-local-storage.js"></script>
        <script src="assets/angular/app.js"></script>
        <script src="assets/angular/components/menu/menu-controller.js"></script>
        <script src="assets/angular/components/menu/menu-service.js"></script>
        <script src="assets/angular/components/menu/menu-directive.js"></script>
        <script src="assets/angular/components/menu/menu.js"></script>
        <script src="assets/angular/components/modal/modal-directive.js"></script>
        <script src="assets/angular/components/modal/modal.js"></script>
        <script src="assets/angular/components/cart/cart.js"></script>
        <script src="assets/angular/components/cart/cart-directive.js"></script>
        <script src="assets/angular/components/cart/cart-controller.js"></script>
        <script src="assets/angular/components/cart/cart-service.js"></script>
    </body>
</html>
