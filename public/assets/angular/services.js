var justmenuServices = angular.module('justmenuServices', ['ngResource']);

justmenuServices.factory('Menu', ['$resource',
        function($resource){
            return $resource('all.php', {}, {
                query: {method: 'GET', isArray: false}
            });
        }]);
