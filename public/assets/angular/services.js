var justmenuServices = angular.module('justmenuServices', ['ngResource']);

justmenuServices.factory('Menu', ['$resource',
        function($resource){
            return $resource('all', {}, {
                query: {method:'GET', params:{}, isArray:true}
            });
        }]);
