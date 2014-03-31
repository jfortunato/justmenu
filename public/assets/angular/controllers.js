//var justmenuApp = angular.module('justmenuApp', []);
var justmenuControllers = angular.module('justmenuControllers', []);
 
justmenuApp.controller('JustMenuController', function ($scope, $http) {
  $http.get('all.php').success(function(data) {
    $scope.categories = data.categories;

    $scope.selectedIndex = 0;

    $scope.toggleCategory = function ($index) {
        $scope.selectedIndex = $index;
    };
  });
});
