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

        <div ng-controller="MainController">
            <div ng-view></div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
        <script src="assets/compiled/justmenu.min.js"></script>
    </body>
</html>
