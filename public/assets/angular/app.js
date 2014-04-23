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

angular.module('justmenu', ['ngRoute', 'justmenu.menu', 'justmenu.modal', 'justmenu.cart', 'justmenu.admin'])

.controller('MainController', function () {
    
})

.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/order-online', {
        templateUrl: 'assets/angular/components/menu/view.html',
        controller: 'MenuController'
    })
    .when('/admin', {
        templateUrl: 'assets/angular/components/admin/view.html',
        controller: 'AdminController'
    })
    .otherwise({redirectTo: '/order-online'});
}]);
