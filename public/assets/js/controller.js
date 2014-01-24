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
        
        this.view.bind('emptyCart', function () {
            this.emptyCart();
        }.bind(this));

        this.view.bind('undoEmptyCart', function () {
            this.undoEmptyCart();
        }.bind(this));
    }

    Controller.prototype.showAll = function() {
        var items = this.cart.read();
        this.view.render('showCart', items);
    };

    Controller.prototype.addToCart = function(item) {
        this.cart.addItem(item);
        this.showAll();
    };

    Controller.prototype.removeFromCart = function(item_id) {
        this.cart.removeItem(item_id);
        this.showAll();
    };

    Controller.prototype.emptyCart = function() {
        if(!this.cart.isEmpty()){
            this.cart.empty();
            this.view.render('showUndoEmptyCart');
        }
    };

    Controller.prototype.undoEmptyCart = function() {
        this.cart.undoEmpty();
        this.showAll();
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Controller = Controller;
})(window);
