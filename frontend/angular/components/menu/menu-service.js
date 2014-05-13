angular.module('justmenu.menu.services', ['ngResource'])

.factory('Menu', ['$rootScope', '$resource', function ($rootScope, $resource) {
    return {
        all: function () {
            var menu = this.resource().get(function () {

                // add category options to items
                var categories = menu.categories;
                categories.forEach(function (category) {
                    category.items.forEach(function (item) {
                        if (item.items) {
                            item.items.forEach(function (choice) {
                                choice.menu_component_options = choice.menu_component_options.concat(category.menu_component_options);
                            });
                        } else {
                            item.menu_component_options = item.menu_component_options.concat(category.menu_component_options);
                        }
                    });
                });

            });

            return menu;
        },

        resource: function () {
            return $resource('/justmenu/menu');
        },
    };
}]);
