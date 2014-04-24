angular.module('justmenu.modal.directives', [])

.directive('jmModal', function () {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: '/assets/angular/components/modal/modal.html',
        scope: {
            modalShowing: '=show',
            positiveAction: '&'
        },
        link: function ($scope) {
            $scope.hideModal = function () {
                $scope.modalShowing = false;
            };
        },
    };
});
