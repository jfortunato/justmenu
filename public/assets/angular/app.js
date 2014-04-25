angular.module('justmenu', ['ngRoute', 'justmenu.menu', 'justmenu.modal', 'justmenu.cart', 'justmenu.admin'])

.controller('MainController', function () {
})

.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/order-online', {
        templateUrl: 'assets/angular/components/menu/view.html',
        controller: 'MenuController'
    })
    .when('/admin', {
        templateUrl: 'assets/angular/components/admin/view.html',
        controller: 'AdminController'
    })
    .otherwise({redirectTo: '/order-online'});
}])

.filter('parens', function () {
    return function (input) {
        return input ? '(' + input + ')' : '';
    };
});
