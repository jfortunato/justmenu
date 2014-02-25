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
        if (event === 'selectedItem') {
            $live('[data-select-size]', 'click', function (e) {
                var item = this.makeItemFromSelection(e.target);
                handler(item);
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
        } else if (event === 'finishedWithOptions') {
            $live('.modal-footer button', 'click', function (e) {
                if (!this.checkAllRequiredOptions()) {
                    return;
                }
                //var modal = this.container.firstChild;
                //modal.style.cssText = 'display: none; opacity: 0;';
                this.hideModal();
                var selected_options = this.getSelectedOptions();
                var item = this.optionBox.getItem();
                item.selected_options = selected_options;
                handler(item);
            }.bind(this));
        }
    };

    View.prototype.showTotals = function(items) {
        var subtotal = 0, tax = 0, total = 0;

        if (items && items.length >= 1) {
            items.forEach(function (item) {
                subtotal += parseFloat(item.price);
                // add any selected options
                item.selected_options.forEach(function (option) {
                    subtotal += parseFloat(option.price);
                });
                subtotal *= item.quantity;
            });
        }

        tax = 0.00;
        total = subtotal + tax;

        this.$subTotal.innerHTML = '$'+subtotal.toFixed(2);
        this.$tax.innerHTML = '$'+tax.toFixed(2);
        this.$total.innerHTML = '$'+total.toFixed(2);
    };

    View.prototype.makeItemFromSelection = function(selectedBtn) {
        var isChoice = $closest(selectedBtn, '[data-choice]') !== undefined ? true:false;
        var base = isChoice ? $closest(selectedBtn, '[data-choice]'):$closest(selectedBtn, '[data-item]');

        var item = {
            item_id: base.dataset.item,
            quantity: 1,
            title: base.querySelector('[data-title]').dataset.title,
            size: selectedBtn.dataset.selectSize,
            price: $closest(selectedBtn, '[data-price]').dataset.price,
            selected_options: [],
        };
        item.available_options = this.getItemOptions(base, item.size);

        if (isChoice) {
            item.choices = base.querySelector('input[name="choices"]').value ;
        }

        return item;
    };

    View.prototype.getItemOptions = function(item_base, size) {
        var item_options_ids = item_base.querySelector('input[name="item-options"]').value;
        item_options_ids = JSON.parse(item_options_ids);

        // might be a choice which doesnt have a category
        var category_base = $closest(item_base, '[data-category]');
        var category_option_ids = category_base === undefined ? '[]':category_base.querySelector('input[name="category-options"]').value;
        category_option_ids = JSON.parse(category_option_ids);

        // now combine the item/category option ids
        var option_ids = item_options_ids.concat(category_option_ids);

        var options = document.querySelector('[data-justmenu]>input[name="options"]').value;
        options = JSON.parse(options);

        var results = [];
        option_ids.forEach(function (option_id) {
            options.forEach(function (option) {
                if (option.id === option_id.id && (option_id.size === size || option_id.size === 'any')) {
                    // push the required attribute to the option
                    option.required = option_id.required;
                    option.size = size;
                    results.push(option);
                }
            }.bind(this));
        }.bind(this));

        return results;
    };

    View.prototype.getSelectedOptions = function() {
        var selected_options = [];
        [].map.call(document.querySelectorAll('.modal input:checked'), function (obj) {
            selected_options.push({title:obj.value, price:obj.dataset.price});
        });

        return selected_options;
    };

    View.prototype.checkAllRequiredOptions = function() {
        var valid = true;
        var allRequiredInputs = document.querySelectorAll('.modal input[required]');
        allRequiredInputs.forEach(function (input) {
            if (valid && !input.validity.valid) {
                valid = false;
                // place an error message just before the option section
                var errorMsg = document.createElement('p');
                errorMsg.className = 'text-danger';
                errorMsg.textContent = input.validationMessage;
                var section = $closest(input, '[data-option-id]');
                document.querySelector('.modal-body').insertBefore(errorMsg, section);
            }
        });

        return valid;
    };

    View.prototype.createModalContainerIfNotExists = function() {
        this.optionBox = new JustMenu.OptionBox();

        if (document.querySelector('div#justmenu-option-container')) {
            this.container = document.querySelector('div#justmenu-option-container');
        } else {
            this.container = document.createElement('div');
            this.container.id = 'justmenu-option-container';
            this.body.appendChild(this.container);
            // also append overlay
            var overlay = document.createElement('div');
            overlay.id = 'overlay';
            this.body.appendChild(overlay);
        }
    };

    View.prototype.showChoiceBox = function(options) {
        this.createModalContainerIfNotExists();

        this.container.innerHTML = this.optionBox.showBox(options);
        this.showModal();
    };

    View.prototype.showOptionBox = function(item, availableOptions) {
        this.createModalContainerIfNotExists();

        this.optionBox.setItem(item);
        this.container.innerHTML = this.optionBox.showOptionValues(availableOptions);
        this.showModal();
    };

    View.prototype.showModal = function() {
        var modal = document.querySelector('#justmenu-option-container');
        var overlay = document.querySelector('#overlay');
        modal.style.cssText = 'display: block; opacity: 1;';
        overlay.style.display = 'block';
    };

    View.prototype.hideModal = function() {
        var modal = document.querySelector('#justmenu-option-container');
        var overlay = document.querySelector('#overlay');
        modal.style.cssText = 'display: none; opacity: 0;';
        overlay.style.display = 'none';
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.View = View;
})(window);
