(function(window){
    'use strict';

    function View(template) {
        this.template = template;

        var $ = document.querySelector.bind(document);
        var $$ = document.querySelectorAll.bind(document);

        this.$cartContents = $('#cart-contents');
        this.$selectBtns = $$('[data-justmenu] [data-select-size]');
        this.$subTotal = $('[data-subtotal]');
        this.$tax = $('[data-tax]');
        this.$total = $('[data-total]');
        this.$emptyCart = $('#empty-cart');
        this.$undoEmptyCart = $('#undo-empty-cart');
    }

    View.prototype.render = function(command, parameter) {
        var that = this;
        var viewCommands = {
            showCart: function () {
                that.$cartContents.innerHTML = that.template.showItems(parameter);
                that.showTotals(parameter);
            },
            showUndoEmptyCart: function () {
                that.$cartContents.innerHTML = that.template.showUndoEmpty();
                that.showTotals();
            }
        };

        viewCommands[command]();
    };

    View.prototype.bind = function(event, handler) {
        if (event === 'addToCart') {
            this.$selectBtns.forEach(function (el) {
                el.addEventListener('click', function (e) {
                    var item = this.makeItemFromProperties(e.target);
                    handler(item);
                }.bind(this));
            }.bind(this));
        } else if (event === 'emptyCart') {
            this.$emptyCart.addEventListener('click', function (e) {
                handler();
            }.bind(this));
        } else if (event === 'undoEmptyCart') {
            $live('#undo-empty-cart', 'click', function (e) {
                handler();
            }.bind(this));
        } else if (event === 'increaseQuantity') {
            $live('#increase-quantity', 'click', function (e) {
                var item_id = $closest(e.target, '[data-cart-id]').dataset.cartId;
                handler(item_id);
            }.bind(this));
        } else if (event === 'decreaseQuantity') {
            $live('#decrease-quantity', 'click', function (e) {
                var item_id = $closest(e.target, '[data-cart-id]').dataset.cartId;
                handler(item_id);
            }.bind(this));
        }
    };

    View.prototype.showTotals = function(items) {
        var subtotal = 0, tax = 0, total = 0;

        if (items && items.length >= 1) {
            items.forEach(function (item) {
                subtotal += parseFloat(item.price);
            });
        }

        tax = 0.00;
        total = subtotal + tax;

        this.$subTotal.innerHTML = '$'+subtotal.toFixed(2);
        this.$tax.innerHTML = '$'+tax.toFixed(2);
        this.$total.innerHTML = '$'+total.toFixed(2);
    };

    View.prototype.makeItemFromProperties = function(selectedBtn) {
        var item = {
            item_id: $closest(selectedBtn, '[data-item]').dataset.item,
            quantity: 1,
            title: $closest(selectedBtn, '[data-item]').querySelector('[data-title]').dataset.title,
            size: selectedBtn.dataset.selectSize,
            price: $closest(selectedBtn, '[data-price]').dataset.price
        };

        return item;
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.View = View;
})(window);
