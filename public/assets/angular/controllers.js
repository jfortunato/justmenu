var justmenuControllers = angular.module('justmenuControllers', []);

justmenuControllers.controller('JustMenuController', ['$scope', 'Menu', 'Storage', function ($scope, Menu, Storage) {
    Menu.query().$promise.then(function (result) {
        // we need to loop thru the categories items and combine items
        // that are choices.
        var categories = result.categories;
        var renderedChoiceIds = [];
        categories.forEach(function (category) {
            var items = [];
            category.items.forEach(function (item) {
                if (item.choice) {
                    if (renderedChoiceIds.indexOf(item.choice.id) === -1) {
                        // keep track of choice-items we have already processed
                        renderedChoiceIds.push(item.choice.id);

                        // store this item and add it to the beginning of the available choices
                        var origItem = {
                            description: item.description,
                            id: item.id,
                            info: item.info,
                            menu_component_options: item.menu_component_options,
                            sizes: item.sizes,
                            title: item.title,
                        };
                        var choices = item.choice.items;
                        choices[0] = origItem;

                        // here we override the original items attributes with the 
                        // first choice that comes up.
                        item.id = item.choice.id;
                        item.title = item.choice.title;
                        item.description = item.choice.description;
                        item.info = item.choice.info;
                        item.choice = choices;
                        items.push(item);
                    }
                } else {
                    // add any category options to the item
                    item.menu_component_options = item.menu_component_options.concat(category.menu_component_options);

                    items.push(item);
                }
            });
            category.items = items;
        });

        $scope.categories = categories;
        $scope.renderedChoiceIds = [];
        console.dir($scope.categories);

        $scope.selectedIndex = 0;

        $scope.toggleCategory = function ($index) {
            $scope.selectedIndex = $index;
        };
    });

    $scope.cart = Storage.findAll();

    $scope.showModal = false;
    $scope.selectedItem = function (item, size) {
        // hide the undo cart empty if showing
        $scope.lastItems = [];

        if (item.choice) {
            $scope.showModal = true;
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
            $scope.showModal = true;

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
        $scope.showModal = false;

        var newItem = {
            item_id: item.id,
            quantity: 1,
            title: item.title,
            size: size.size,
            price: size.price,
            selected_options: item.selected_options || [],
        };

        Storage.save(newItem);
        $scope.cart = Storage.findAll();
    }

    $scope.finishedWithOptions = function (item, size) {
        var selected_options = [];
        [].map.call(document.querySelectorAll('.modal input:checked'), function (obj) {
            selected_options.push({title:obj.value, price:obj.dataset.price});
        });

        item.selected_options = selected_options;
        $scope.selectedItem(item, size);
    }

    $scope.increaseQuantity = function (id) {
        var item = Storage.find({id: id});
        item.quantity++;
        Storage.save(item);

        $scope.cart = Storage.findAll();
    }

    $scope.decreaseQuantity = function (id) {
        var item = Storage.find({id: id});
        item.quantity--;
        if (item.quantity <= 0) {
            Storage.remove(id);
        } else {
            Storage.save(item);
        }

        $scope.cart = Storage.findAll();
    }

    $scope.lastItems = [];
    $scope.emptyCart = function () {
        if (!$scope.lastItems.length) {
            $scope.lastItems = Storage.findAll();
            $scope.lastItems.forEach(function (item) {
                Storage.remove(item.id);
                // if user wants to undo we'll generate a new id
                delete item.id;
            });

            $scope.cart = Storage.findAll();
        }
    }

    $scope.undoEmptyCart = function () {
        $scope.lastItems.forEach(function (item) {
            Storage.save(item);
        });
        $scope.lastItems = [];
        $scope.cart = Storage.findAll();
    }

}]);
