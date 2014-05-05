angular.module('justmenu.menu.controllers', [])

.controller('MenuController', ['$scope', 'Menu', 'Cart', function ($scope, Menu, Cart) {
    $scope.menu = Menu.all();

    $scope.toggleCategory = function ($index) {
        $scope.selectedIndex = $index;
    };

    $scope.toggleSlide = function () {
        $scope.slide = !$scope.slide;
    };

    $scope.toggleCart = function () {
        $scope.slideCart = !$scope.slideCart;
    };

    $scope.clearSearch = function () {
        $scope.searchMenu = null;
    };

    $scope.cart = Cart;
}]);
