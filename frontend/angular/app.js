angular.module('justmenu', ['ngRoute', 'justmenu.menu', 'justmenu.cart', 'justmenu.admin', 'justmenu.checkout', 'ui.bootstrap'])

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
    .when('/checkout', {
        templateUrl: 'template/checkout/view.html',
        controller: 'CheckoutController'
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
})

.filter('available', function () {
    return function (input, category, item) {

        var days = [];
        var times = '';

        if (item.special_time) {
            days = JSON.parse(item.special_time.days);
            times = item.special_time.times.split('-');
        } else if (category.special_time) {
            days = JSON.parse(category.special_time.days);
            times = category.special_time.times.split('-');
        }

        item.available = true;

        if (days.length) {
            if (checkDay(days)) {
                item.available = checkTime(times);
            } else {
                item.available = false;
            }
        } else if (times.length) {
            item.available = checkTime(times);
        }

        function checkDay(days) {
            return days.indexOf(new Date().getDay()) !== -1 ? true:false;
        }

        function checkTime(times) {
            var start = times.length === 2 ? times[0]:null;
            var end = times.length === 2 ? times[1]:times[0];
            var now = new Date().getHours()+""+new Date().getMinutes();
            if (start) {
                return now >= start && now <= end ? true:false;
            }

            return now <= end || times[0] === '' ? true:false;
        }

        return input;
    };
});
