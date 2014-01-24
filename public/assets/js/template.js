(function(window){
    'use strict';

    function Template() {
        this.defaultTemplate
        =   '<li>'
        +       '<span class="glyphicon glyphicon-remove" data-item-id="{{id}}"></span>'
        +       '{{title}} ({{size}})'
        +       '<span class="pull-right">${{price}}</span>'
        +   '</li>'
    }

    Template.prototype.show = function(data) {
        var view = '';

        for (var i = 0, l = data.length; i < l; i ++) {
            var template = this.defaultTemplate;

            template = template.replace('{{id}}', data[i].id);
            template = template.replace('{{title}}', data[i].title);
            template = template.replace('{{size}}', data[i].size);
            template = template.replace('{{price}}', data[i].price);

            view = view + template;
        }

        return view;
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Template = Template;
})(window);
