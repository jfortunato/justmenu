(function(window){
    'use strict';

    function Template() {
        this.contentsTemplate
        =   '<li data-cart-id="{{id}}">'
        +       ' <button id="decrease-quantity" class="icon-down-open" type="button"><span></span></button>'
        +       ' <button id="increase-quantity" class="icon-up-open" type="button"><span></span></button>'
        +       ' {{quantity}} {{title}} ({{size}}) <ul data-options>{{selected_options}}</ul>'
        +       '<span>${{price}}</span>'
        +   '</li>';


        this.undoEmptyTemplate
        =   '<div>'
        +       '<p><span></span> You just emptied your cart. Would you like to <span id="undo-empty-cart">undo?</span></p>'
        +   '</div>';
    }

    Template.prototype.showItems = function(items) {
        var view = '';

        for (var i = 0, l = items.length; i < l; i ++) {
            var template = this.contentsTemplate;

            template = template.replace('{{id}}', items[i].id);
            template = template.replace('{{quantity}}', items[i].quantity);
            template = template.replace('{{title}}', items[i].title);
            template = template.replace('{{size}}', items[i].size);
            template = template.replace('{{price}}', items[i].price);
            template = template.replace('{{selected_options}}', this.renderSelectedOptions(items[i].selected_options));
            template += i === items.length-1 ? '':'<hr>';

            view = view + template;
        }

        return view || '<li>Nothing in cart.</li>';
    };

    Template.prototype.renderSelectedOptions = function(selectedOptions) {
        var selected_options = [];
        selectedOptions.forEach(function (option) {
            selected_options.push('<li>'+option.title+' <span>+$'+parseFloat(option.price).toFixed(2)+'</span></li>');
        });

        return selected_options.join('');
    };

    Template.prototype.showUndoEmpty = function() {
        return this.undoEmptyTemplate;
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Template = Template;
})(window);
