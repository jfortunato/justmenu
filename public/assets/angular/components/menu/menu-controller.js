angular.module('justmenu.menu.controllers', [])

.controller('MenuController', ['$scope', 'Menu', function ($scope, Menu) {
    $scope.menu = Menu.all();

    $scope.toggleCategory = function ($index) {
        $scope.selectedIndex = $index;
    };

    $scope.toggleSlide = function () {
        $scope.slide = !$scope.slide;
    };
}]);
