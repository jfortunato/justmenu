angular.module('justmenu.menu.directives', ['justmenu.cart.services'])

.directive('jmMenu', [function () {
    return {
        restrict: 'E',
        templateUrl: '/assets/angular/components/menu/menu.html',
    };
}])

.directive('jmSelectItem', ['Cart', '$rootScope', function (Cart, $rootScope) {
    return {
        restrict: 'A',
        scope: {
            item: '=',
            size: '=',
        },
        link: function (scope, element, attrs) {
            // TODO this obviously needs to be refactored

            var item = scope.item;
            var size = scope.size

            function process() {
                if (item.choice) {
                    showChoices();
                } else if (item.menu_component_options) {
                    showOptions();
                } else {
                    $rootScope.modalShowing = false;
                    addItem();
                }
            };

            function showChoices() {
                $rootScope.modalShowing = true;

                var count = 0;
                for (var prop in item.choice) {
                    if (!isNaN(prop)) {
                        count++;
                    }
                }
                item.choice.length = count;
                // convert to array
                $rootScope.choices = [].slice.call(item.choice);
                // add in the currently selected size to choices
                $rootScope.choices.forEach(function (choice) {
                    choice.chosenSize = size;
                });
            };

            function showOptions() {
                $rootScope.modalShowing = true;

                $rootScope.item = item;
                $rootScope.size = size;
                $rootScope.options = [];
                item.menu_component_options.forEach(function (option) {
                    if (option.size = size.size || option.size === 'any') {
                        $rootScope.options.push(option);
                    }
                });

                $rootScope.modalPositiveAction = function () {
                    var selected_options = [];
                    [].map.call(document.querySelectorAll('.modal input:checked'), function (obj) {
                        selected_options.push({title:obj.value, price:obj.dataset.price});
                    });

                    $rootScope.item.selected_options = selected_options;

                    $rootScope.modalShowing = false;

                    var item = $rootScope.item;
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
            };

            function addItem() {
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

            element.bind('click', function () {
                process();
                scope.$apply();
            });
        },
    };
}]);
