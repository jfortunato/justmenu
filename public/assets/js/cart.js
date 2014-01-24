(function(window){
    'use strict';

    function Cart(storage) {
        this.storage = storage;
    };

    Cart.prototype.read = function() {
        return this.storage.findAll();
    };

    Cart.prototype.addItem = function(id, item, price) {
        var newItem = {
            id: id,
            item: item,
            price: price
        };

        this.storage.save(newItem);
    };

    Cart.prototype.removeItem = function(id) {
        this.storage.remove(id);
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Cart = Cart;
})(window);
