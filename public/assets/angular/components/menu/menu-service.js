angular.module('justmenu.menu.services', ['ngResource'])

.factory('Menu', ['$rootScope', '$resource', '$http', function ($rootScope, $resource, $http) {
    return {
        all: function () {
            var menu = this.resource().get(function () {
                
                // we need to combine items that are choices into a single item
                // TODO this obviously needs to be refactored
                var categories = menu.categories;
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
                menu.categories = categories;


            });

            return menu;
        },

        resource: function () {
            return $resource('/all.php');
        },

        fetchMenu: function () {
            return $http.get('/all.php');
        },
    };
}]);
