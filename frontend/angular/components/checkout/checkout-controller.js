angular.module('justmenu.checkout.controllers', [])

.controller('CheckoutController', ['$scope', '$location', 'Cart', '$http', function ($scope, $location, Cart, $http) {
    $scope.info = {
        contents: JSON.stringify(Cart.cart),
    };

    $scope.total = Cart.total();

    $scope.placeOrder = function (info) {
        // in order to handle $_POST as would be expected server-side
        // we must set content-type and transform request
        $http({
            method: 'POST',
            url: '/justmenu/place-order',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            transformRequest: function(obj) {
                var str = [];
                for(var p in obj)
                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                return str.join("&");
            },
            data: info
        }).success(function (data) {
            if (data.success) {
                $location.path('/complete');
            } else {
                console.dir(data.errors);
                $scope.errors = data.errors;
            }
        });
    };
}])

.controller('CompleteController', ['$scope', function ($scope) {
}]);
