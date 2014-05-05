angular.module('justmenu.cart.directives', [])

.directive('jmCart', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'E',
        template: $templateCache.get('cart.html'),
    };
}]);
