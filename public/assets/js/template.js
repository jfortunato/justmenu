(function(window){
    'use strict';

    function Template() {
        this.contentsTemplate
        =   '<li data-cart-id="{{id}}">'
        +       ' <button id="decrease-quantity" type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-down"></span></button>'
        +       ' <button id="increase-quantity" type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-up"></span></button>'
        +       ' {{quantity}} {{title}} ({{size}}) <ul data-options>{{selected_options}}</ul>'
        +       '<span class="pull-right">${{price}}</span>'
        +   '</li>';


        this.undoEmptyTemplate
        =   '<div class="alert alert-info">'
        +       '<p><span class="glyphicon glyphicon-exclamation-sign"></span> You just emptied your cart. Would you like to <span id="undo-empty-cart" class="btn btn-primary">undo?</span></p>'
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
            var selected_options = [];
            items[i].selected_options.forEach(function (option) {
                selected_options.push('<li>'+option+'</li>');
            });
            template = template.replace('{{selected_options}}', selected_options.join(''));
            template += i === items.length-1 ? '':'<hr>';

            view = view + template;
        }

        return view || '<li>Nothing in cart.</li>';
    };

    Template.prototype.showUndoEmpty = function() {
        return this.undoEmptyTemplate;
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Template = Template;
})(window);
