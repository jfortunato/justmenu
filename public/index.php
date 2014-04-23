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
            <div ng-controller="MainController">
                <div ng-view></div>

                <jm-modal show="modalShowing" positive-action="modalPositiveAction()">

                    <div ng-repeat="item in choices">
                        <p>{{ item.title }} <button type="button" class="jm-btn" item="item" size="item.chosenSize" jm-select-item>Select</button></p>
                    </div>

                    <div ng-repeat="option in options">
                        <h3>{{ option.option.title }}</h3>
                        <p ng-if="option.option.choice_mode === 0" ng-repeat="value in option.option.values">
                            {{ value.title }} (+${{ value.default_price }})

                            <input type="radio" data-price="{{ value.default_price }}" name="{{ option.option.title }}" value="{{ value.title }}" {{ option.required ? 'required':'' }} />
                        </p>
                        <p ng-if="option.option.choice_mode === 1" ng-repeat="value in option.option.values">
                            {{ value.title }} (+${{ value.default_price }})

                            No <input type="checkbox" data-price="0" name="{{ option.option.title }}" value="no {{ value.title }}" />
                            Add <input type="checkbox" data-price="{{ value.default_price }}" name="{{ option.option.title }}" value="add {{ value.title }}" />
                        </p>
                    </div>

                </jm-modal>
            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
        <script src="assets/compiled/justmenu.min.js"></script>
    </body>
</html>
