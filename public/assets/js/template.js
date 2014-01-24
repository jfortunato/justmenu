(function(window){
    'use strict';

    function Template() {
        this.contentsTemplate
        =   '<li>'
        +       '<span class="glyphicon glyphicon-remove" data-item-id="{{id}}"></span>'
        +       '{{title}} ({{size}})'
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
            template = template.replace('{{title}}', items[i].title);
            template = template.replace('{{size}}', items[i].size);
            template = template.replace('{{price}}', items[i].price);

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
