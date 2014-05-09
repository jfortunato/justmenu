angular.module('justmenu.checkout.controllers', [])

.controller('CheckoutController', ['$scope', '$location', 'Cart', function ($scope, $location, Cart) {
    $scope.total = Cart.total();

    $scope.placeOrder = function () {
        $location.path('/complete');
    };
}])

.controller('CompleteController', ['$scope', function ($scope) {
}]);
