var justmenuApp = angular.module('justmenuApp', ['ngRoute', 'justmenuControllers']);

justmenuApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/order-online', {
        templateUrl: 'menu.html',
        controller: 'JustMenuController'
      }).
      otherwise({
        redirectTo: '/order-online'
      });
  }]);
