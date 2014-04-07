var justmenuControllers = angular.module('justmenuControllers', []);

justmenuControllers.controller('JustMenuController', ['$scope', 'Menu', 'Storage', function ($scope, Menu, Storage) {
    Menu.query().$promise.then(function (result) {
        $scope.categories = result.categories;

        $scope.selectedIndex = 0;

        $scope.toggleCategory = function ($index) {
            $scope.selectedIndex = $index;
        };
    });

    $scope.cart = Storage.findAll();

    $scope.selectedItem = function (item, size) {
        // hide the undo cart empty if showing
        $scope.lastItems = [];

        var newItem = {
            item_id: item.id,
            quantity: 1,
            title: item.title,
            size: size.size,
            price: size.price,
            selected_options: [],
        };

        Storage.save(newItem);
        $scope.cart = Storage.findAll();
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
