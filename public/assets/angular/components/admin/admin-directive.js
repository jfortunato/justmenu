angular.module('justmenu.admin.directives', [])

.directive('jmEditable', ['$compile', '$http', function ($compile, $http) {
    return {
        restrict: 'A',
        link: function ($scope, element, attrs) {
            var text;

            $scope.dismiss = function () {
                element.html(text);
            };

            $scope.save = function () {
                text = element.find('input').val();
                element.html(text);
            };

            element.on('dblclick', function () {
                text = element.text();
                element.html('<input type="text" value="'+text+'" /><button class="jm-btn" ng-click="save()" type="button">Save</button><button class="jm-btn" ng-click="dismiss()">Cancel</button>');

                $compile(element.contents())($scope);
            });
        },
    };
}]);
