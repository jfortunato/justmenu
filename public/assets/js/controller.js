(function(window){
    'use strict';

    function Controller(model, view) {
        this.cart = model;
        this.view = view;

        this.view.bind('addToCart', function (item) {
            this.addToCart(item);
        }.bind(this));

        this.view.bind('removeFromCart', function (item) {
            this.removeFromCart(item.id);
        }.bind(this));
    }

    Controller.prototype.showAll = function() {
        var data = this.cart.read();
        this.view.render('showCart', data);
    };

    Controller.prototype.addToCart = function(item) {
        this.cart.addItem(item);
        this.showAll();
    };

    Controller.prototype.removeFromCart = function(item_id) {
        this.cart.removeItem(item_id);
        this.showAll();
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Controller = Controller;
})(window);
