angular.module('justmenu.admin.controllers', [])

.controller('AdminController', ['$scope', 'Menu', function ($scope, Menu) {
    $scope.menu = Menu.all();

    $scope.toggleCategory = function ($index) {
        $scope.selectedIndex = $index;
    };
}]);
