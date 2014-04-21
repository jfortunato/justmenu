angular.module('justmenu.modal.directives', [])

.directive('jmModal', function () {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: '/assets/angular/components/modal/modal.html',
        controller: function ($scope) {
            $scope.showModal = function () {
                $scope.modalShowing = true;
            };

            $scope.hideModal = function () {
                $scope.modalShowing = false;
            };
        },
    };
});
