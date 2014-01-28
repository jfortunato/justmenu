(function(window){
    'use strict';

    function View(template) {
        this.template = template;

        var $ = document.querySelector.bind(document);
        var $$ = document.querySelectorAll.bind(document);

        this.body = $('body');
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
            $live('[data-select-size]', 'click', function (e) {
                this.selectedItem(e.target, handler);
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

    View.prototype.selectedItem = function(target, handler) {
        var isChoice = $closest(target, '[data-choice]') !== undefined ? true:false;
        if (isChoice) {
            var options = $closest(target, '[data-choice]').querySelector('input[name="choices"]').value;
            options = JSON.parse(options);
            var size = target.dataset.selectSize;
            var price = $closest(target, '[data-price]').dataset.price;
            options.forEach(function (option) {
                option.size = size;
                option.price = price;
            }.bind(this));
            this.showOptionBox(options);
        } else  {
            var item = this.makeItemFromProperties(target);
            handler(item);
        }
    };

    View.prototype.showOptionBox = function(options) {
        var container;

        if (document.querySelector('div#justmenu-option-container')) {
            container = document.querySelector('div#justmenu-option-container');
        } else {
            container = document.createElement('div');
            container.id = 'justmenu-option-container';
            this.body.appendChild(container);
        }

        var optionBox = new JustMenu.OptionBox();
        container.innerHTML = optionBox.showBox(options);
        jQuery('.modal').modal('show');
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.View = View;
})(window);
