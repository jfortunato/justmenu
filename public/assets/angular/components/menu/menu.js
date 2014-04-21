angular.module('justmenu.menu', ['ngRoute', 'justmenu.menu.services', 'justmenu.menu.controllers', 'justmenu.menu.directives'])

.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/order-online', {
        templateUrl: 'assets/angular/components/menu/view.html',
        controller: 'MenuController'
    });
}]);

