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

        this.view.bind('finishedWithOptions', function (item) {
            this.finishedWithOptions(item);
        }.bind(this));

        this.view.bind('closeModal', function () {
            this.view.hideModal();
        }.bind(this));

        this.view.bind('toggleCategory', function (category_id) {
            this.view.toggleCategory(category_id);
        }.bind(this));
    }

    Controller.prototype.showAll = function() {
        var items = this.cart.read();
        this.view.render('showCart', items);
    };

    Controller.prototype.selectedItem = function(item) {
        if (this._isChoice(item)) {
            var choices = JSON.parse(item.choices);
            this._addPropertiesToChoices(choices, item);
            this.view.showChoiceBox(choices);
        } else if (this._hasOptions(item)) {
            var availableOptions = item.available_options;
            this.view.showOptionBox(item, availableOptions);
        } else {
            this.cart.addItem(item);
            this.showAll();
        }
    };

    Controller.prototype.finishedWithOptions = function(item) {
        this.cart.addItem(item);
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

    Controller.prototype._addPropertiesToChoices = function(choices, origChoice) {
        choices.forEach(function (choice) {
            choice.size = origChoice.size;
            choice.price = origChoice.price;
            choice.available_options = origChoice.available_options;
        });
    };

    Controller.prototype._hasOptions = function(item) {
        return item.available_options.length !== 0 ? true:false;
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Controller = Controller;
})(window);
