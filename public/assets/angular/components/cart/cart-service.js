angular.module('justmenu.cart.services', ['LocalStorageModule'])

.factory('Cart', ['$rootScope', 'localStorageService', function ($rootScope, localStorageService) {
    var service = {
        cart: localStorageService.get('cart') || [],
        lastCart: [],

        addItem: function (item) {
            this.lastCart = [];
            this.cart.push(item);
        },

        removeItem: function (item) {
            this.cart.splice(this.cart.indexOf(item), 1);
        },

        save: function () {
            localStorageService.add('cart', this.cart);
        },

        increaseQuantity: function (item) {
            item.quantity++;
        },

        decreaseQuantity: function (item) {
            item.quantity--;
            if (item.quantity <= 0) {
                this.removeItem(item);
            }
        },

        empty: function () {
            this.lastCart = this.cart;
            this.cart = [];
        },

        undoEmpty: function () {
            this.cart = this.lastCart;
            this.lastCart = [];
        },

        total: function () {
            var subtotal = 0, tax = 0, total = 0;

            this.cart.forEach(function (item) {
                var price = parseFloat(item.price);
                // add any selected options
                item.selected_options.forEach(function (option) {
                    price += parseFloat(option.price);
                });
                price *= item.quantity;
                subtotal += price;
            });

            tax = 0.00;
            total = subtotal + tax;

            return total;
        },
    }

    return service;
}]);
