//var justmenuApp = angular.module('justmenuApp', ['ngRoute', 'justmenuControllers', 'justmenuServices']);

//justmenuApp.config(['$routeProvider',
  //function($routeProvider) {
    //$routeProvider.
      //when('/order-online', {
        //templateUrl: 'assets/angular/views/menu.html',
        //controller: 'JustMenuController'
      //}).
      //otherwise({
        //redirectTo: '/order-online'
      //});
  //}]);

angular.module('justmenu', ['ngRoute', 'justmenu.menu', 'justmenu.modal', 'justmenu.cart'])

.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.otherwise({redirectTo: '/order-online'});
}]);
