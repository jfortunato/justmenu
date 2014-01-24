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

    Cart.prototype.isEmpty = function() {
        return this.read().length < 1 ? true:false;
    };

    Cart.prototype.empty = function() {
        this.lastItems = this.read();
        this.lastItems.forEach(function (item) {
            this.removeItem(item.id);
        }.bind(this));
    };

    Cart.prototype.undoEmpty = function() {
        this.lastItems.forEach(function (item) {
            this.addItem(item);
        }.bind(this));
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Cart = Cart;
})(window);
