var justmenuApp = angular.module('justmenuApp', ['ngRoute', 'justmenuControllers', 'justmenuServices']);

justmenuApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/order-online', {
        templateUrl: 'assets/angular/views/menu.html',
        controller: 'JustMenuController'
      }).
      otherwise({
        redirectTo: '/order-online'
      });
  }]);
