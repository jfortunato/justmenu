angular.module('justmenu.menu.directives', ['justmenu.cart.services'])

.directive('jmMenu', ['Cart', function (Cart) {
    return {
        restrict: 'E',
        templateUrl: '/assets/angular/components/menu/menu.html',
        controller: function ($scope) {
            $scope.selectedItem = function (item, size) {
                // TODO this obviously needs to be refactored

                // hide the undo cart empty if showing
                $scope.lastItems = [];

                if (item.choice) {
                    $scope.showModal();
                    var count = 0;
                    for (var prop in item.choice) {
                        if (!isNaN(prop)) {
                            count++;
                        }
                    }
                    item.choice.length = count;
                    // convert to array
                    $scope.choices = [].slice.call(item.choice);
                    // add in the currently selected size to choices
                    $scope.choices.forEach(function (choice) {
                        choice.chosenSize = size;
                    });
                    return;
                }

                // check if the item has options available and not already selected
                if (item.menu_component_options.length && !item.selected_options) {
                    $scope.showModal();

                    $scope.item = item;
                    $scope.size = size;
                    $scope.options = [];
                    item.menu_component_options.forEach(function (option) {
                        if (option.size = size.size || option.size === 'any') {
                            $scope.options.push(option);
                        }
                    });

                    return; 
                }
                $scope.hideModal();

                var newItem = {
                    item_id: item.id,
                    quantity: 1,
                    title: item.title,
                    size: size.size,
                    price: size.price,
                    selected_options: item.selected_options || [],
                };

                Cart.addItem(newItem);
            };
        },
    };
}]);
