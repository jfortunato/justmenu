(function(window){
    'use strict';

    function View(template) {
        this.template = template;

        var $ = document.querySelector.bind(document);
        var $$ = document.querySelectorAll.bind(document);

        this.$cartContents = $('#cart-contents');
        this.$selectBtns = $$('[data-justmenu] [data-select-size]');
        this.$removeItem = $$('#cart-contents .glyphicon-remove');
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
                var items = parameter;
                // contents
                that.$cartContents.innerHTML = that.template.showItems(items);

                // totals
                var subtotal = 0, tax = 0, total = 0;
                items.forEach(function (item) {
                    subtotal += parseFloat(item.price);
                });
                tax = 0.00;
                total = subtotal + tax;
                that.$subTotal.innerHTML = '$'+subtotal.toFixed(2);
                that.$tax.innerHTML = '$'+tax.toFixed(2);
                that.$total.innerHTML = '$'+total.toFixed(2);
            },
            showUndoEmptyCart: function () {
                that.$cartContents.innerHTML = that.template.showUndoEmpty();
                that.$subTotal.innerHTML = '$0.00';
                that.$tax.innerHTML = '$0.00';
                that.$total.innerHTML = '$0.00';
            }
        };

        viewCommands[command]();
    };

    View.prototype.bind = function(event, handler) {
        if (event === 'addToCart') {
            this.$selectBtns.forEach(function (el) {
                el.addEventListener('click', function (e) {
                    var item = {
                        item_id: $closest(e.target, '[data-item]').dataset.item,
                        title: $closest(e.target, '[data-item]').querySelector('[data-title]').dataset.title,
                        size: e.target.dataset.selectSize,
                        price: $closest(e.target, '[data-price]').dataset.price
                    };

                    handler(item);
                });
            }.bind(this));
        } else if (event === 'removeFromCart') {
            $live('#cart-contents .glyphicon-remove', 'click', function (e) {
                var id = e.target.dataset.itemId;
                handler({id: id});
            }.bind(this));
        } else if (event === 'emptyCart') {
            this.$emptyCart.addEventListener('click', function (e) {
                handler();
            }.bind(this));
        } else if (event === 'undoEmptyCart') {
            $live('#undo-empty-cart', 'click', function (e) {
                handler();
            }.bind(this));
        }
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.View = View;
})(window);
