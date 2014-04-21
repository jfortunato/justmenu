angular.module('justmenu.cart.controllers', [])

.controller('CartController', ['$scope', 'Cart', function ($scope, Cart) {
    var cart = $scope.cart = Cart;

    $scope.$watch('cart', function (newValue, oldValue) {
        if (newValue !== oldValue) { // This prevents unneeded calls to the local storage
            Cart.save();
        }
    }, true);
}]);
