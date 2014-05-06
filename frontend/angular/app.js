angular.module('justmenu', ['ngRoute', 'justmenu.menu', 'justmenu.cart', 'justmenu.admin', 'ui.bootstrap'])

.controller('MainController', function () {
})

.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/order-online', {
        templateUrl: 'template/menu/view.html',
        controller: 'MenuController'
    })
    .when('/admin', {
        templateUrl: 'template/admin/view.html',
        controller: 'AdminController'
    })
    .otherwise({redirectTo: '/order-online'});
}])

.filter('parens', function () {
    return function (input) {
        return input ? '(' + input + ')' : '';
    };
});
