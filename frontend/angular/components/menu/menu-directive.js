angular.module('justmenu.menu.directives', ['justmenu.cart.services'])

.directive('jmSelectItem', ['Cart', '$rootScope', '$modal', function (Cart, $rootScope, $modal) {
    return {
        restrict: 'A',
        scope: {
            item: '=',
            size: '=',
        },
        link: function (scope, element, attrs) {
            var item = scope.item;
            var size = scope.size;

            function process() {
                if (item.items) {
                    showChoices();
                } else if (item.menu_component_options.length) {
                    showOptions();
                } else {
                    addItem();
                }
            }

            function showChoices() {
                $modal.open({
                    templateUrl: 'template/modal/choices.html',
                    resolve: {
                        choices: function () {
                            return item.items;
                        },
                        size: function () {
                            return size;
                        },
                    },
                    controller: function ($scope, $modalInstance, choices, size) {
                        $scope.choices = choices;
                        $scope.size = size;

                        $scope.selected = function () {
                            $modalInstance.close();
                        };
                    },
                });

            }

            function showOptions() {
                $modal.open({
                    templateUrl: 'template/modal/options.html',
                    resolve: {
                        options: function () {
                            var options = [];

                            item.menu_component_options.forEach(function (option) {
                                if (option.size === size.size || option.size === 'any') {
                                    options.push(option);
                                }
                            });

                            return options;
                        }
                    },
                    controller: function ($scope, $modalInstance, options) {
                        $scope.options = options;

                        $scope.title = item.title;

                        $scope.selected = function () {
                            var requiredOptions = document.querySelectorAll('.modal input[required]');
                            for (var i = 0, l = requiredOptions.length; i < l; i ++) {
                                var option = requiredOptions[i];
                                if (!option.validity.valid) {
                                    alert(option.name + " is required.");
                                    return; 
                                }
                            }

                            var selected_options = [];
                            [].map.call(document.querySelectorAll('.modal input:checked'), function (obj) {
                                selected_options.push({title:obj.value, price:obj.dataset.price});
                            });

                            item.selected_options = selected_options;
                            addItem();

                            $modalInstance.close();
                        };

                    },
                });
            }

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

            }

            element.bind('click', function () {
                process();
                scope.$apply();
            });
        },
    };
}]);
