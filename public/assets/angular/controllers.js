//var justmenuApp = angular.module('justmenuApp', []);
var justmenuControllers = angular.module('justmenuControllers', []);

justmenuControllers.controller('JustMenuController', ['$scope', 'Menu', function ($scope, Menu) {
    Menu.query().$promise.then(function (result) {
        $scope.categories = result.categories;

        $scope.selectedIndex = 0;

        $scope.toggleCategory = function ($index) {
            $scope.selectedIndex = $index;
        };
    });

}]);
