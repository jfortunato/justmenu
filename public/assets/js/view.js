(function(window){
    'use strict';

    function View(template) {
        this.template = template;

        var $ = document.querySelector.bind(document);
        var $$ = document.querySelectorAll.bind(document);

        this.$cartContents = $('#cart-contents');
        this.$selectBtns = $$('[data-justmenu] [data-select-size]');
        this.$removeItem = $$('#cart-contents .glyphicon-remove');
    }

    View.prototype.render = function(command, parameter) {
        var that = this;
        var viewCommands = {
            showCart: function () {
                that.$cartContents.innerHTML = that.template.show(parameter);
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
        }
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.View = View;
})(window);
