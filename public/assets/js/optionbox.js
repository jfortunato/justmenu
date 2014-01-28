(function(window){
    'use strict';

    function OptionBox() {
        this.box
        =   '<div class="modal fade" data-show="true">'
        +       '<div class="modal-dialog">'
        +           '<div class="modal-content">'
        +               '<div class="modal-header">'
        +                   '<button type="button" class="close" data-dismiss="modal">&times;</button>'
        +                   '<h4 class="modal-title">Modal Title</h4>'
        +               '</div>'
        +               '<div class="modal-body">'
        +                   '{{view}}'
        +               '</div>'
        +               '<div class="modal-footer">'
        +               '</div>'
        +           '</div>'
        +       '</div>'
        +   '</div>';

        this.template
        =   '<div data-item="{{id}}">'
        +       '<div data-price="{{price}}">'
        +           '<p data-title="{{title}}">{{title}} <a href="#" class="btn btn-default" data-dismiss="modal" data-select-size="{{size}}">Select</a></p>';
        +       '</div>'
        +   '</div>';
    }

    OptionBox.prototype.showBox = function(options) {
        var view = '';

        for (var i = 0, l = options.length; i < l; i ++) {
            var template = this.template;

            template = template.replaceAll('{{id}}', options[i].id);
            template = template.replaceAll('{{price}}', options[i].price);
            template = template.replaceAll('{{title}}', options[i].title);
            template = template.replaceAll('{{size}}', options[i].size);

            view = view + template;
        }

        return this.box.replace('{{view}}', view);
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.OptionBox = OptionBox;
})(window);
