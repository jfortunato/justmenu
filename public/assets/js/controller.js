(function(window){
    'use strict';

    function Controller(model, view) {
        this.cart = model;
        this.view = view;

        this.view.bind('selectedItem', function (item) {
            this.selectedItem(item);
        }.bind(this));

        this.view.bind('emptyCart', function () {
            this.emptyCart();
        }.bind(this));

        this.view.bind('undoEmptyCart', function () {
            this.undoEmptyCart();
        }.bind(this));

        this.view.bind('increaseQuantity', function (item) {
            this.increaseQuantity(item);
        }.bind(this));

        this.view.bind('decreaseQuantity', function (item) {
            this.decreaseQuantity(item);
        }.bind(this));
    }

    Controller.prototype.showAll = function() {
        var items = this.cart.read();
        this.view.render('showCart', items);
    };

    Controller.prototype.selectedItem = function(item) {
        if (this._isChoice(item)) {
            var choices = JSON.parse(item.choices);
            this._addSizeAndPriceToChoices(choices, item.size, item.price);
            this.view.showOptionBox(choices);
        } else {
            this.cart.addItem(item);
            this.showAll();
        }
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

    Controller.prototype.increaseQuantity = function(item_id) {
        this.cart.increaseQuantity(parseInt(item_id));
        this.showAll();
    };

    Controller.prototype.decreaseQuantity = function(item_id) {
        this.cart.decreaseQuantity(parseInt(item_id));
        this.showAll();
    };

    Controller.prototype._isChoice = function(item) {
        return item.choices !== undefined ? true:false;
    };

    Controller.prototype._addSizeAndPriceToChoices = function(choices, size, price) {
        choices.forEach(function (choice) {
            choice.size = size;
            choice.price = price;
        });
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Controller = Controller;
})(window);
