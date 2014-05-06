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
})

.filter('trueSize', function () {
    return function (sizes, item) {
        var trueSizes = [];

        // override the category size if item has it's own size
        for (var i = 0, l = sizes.length; i < l; i ++) {
            trueSizes[i] = sizes[i];
            if (item.sizes.length) {
                item.sizes.forEach(function (size) {
                    if (size.size === sizes[i].size) {
                        trueSizes[i] = size;
                    }
                });
            }
        }

        return trueSizes;
    };
});
