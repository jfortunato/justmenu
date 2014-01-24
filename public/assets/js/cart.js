(function(window){
    'use strict';

    function Cart(storage) {
        this.storage = storage;
    };

    Cart.prototype.read = function() {
        return this.storage.findAll();
    };

    Cart.prototype.addItem = function(item) {
        this.storage.save(item);
    };

    Cart.prototype.removeItem = function(id) {
        this.storage.remove(id);
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Cart = Cart;
})(window);
