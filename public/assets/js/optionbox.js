(function(window){
    'use strict';

    function OptionBox() {
        this.box
        =   '<div class="modal fade" data-show="true">'
        +       '<div class="modal-dialog">'
        +           '<div class="modal-content">'
        +               '<div class="modal-body">'
        +                   '{{view}}'
        +               '</div>'
        +               '<div class="modal-footer">'
        +                   '<button type="button" class="btn btn-success">Done</button>'
        +               '</div>'
        +           '</div>'
        +       '</div>'
        +   '</div>';

        this.view
        =   '<h3>{{heading}}</h3>'
        +   '{{template}}';

        this.choiceTemplate
        =   '<div data-item="{{id}}">'
        +       '<div data-price="{{price}}">'
        +           '<p data-title="{{title}}">{{title}} <a href="#" class="btn btn-default" data-dismiss="modal" data-select-size="{{size}}">Select</a></p>';
        +       '</div>'
        +   '</div>';

        this.singleOptionTemplate
        =   '<div data-option-id="{{id}}">'
        +       '<p data-title="{{title}}">{{title}} (+${{price}}) <input data-price="{{price}}" type="radio" name="radio" value="{{title}}" {{required}} /></p>';
        +   '</div>';

        this.multipleOptionTemplate
        =   '<div data-option-id="{{id}}">'
        +       '<p data-title="{{title}}">{{title}} (+${{price}}) No <input data-price="0" type="checkbox" name="checkbox" value="no {{title}}" /> Add <input data-price="{{price}}" type="checkbox" name="checkbox" value="add {{title}}" /></p>'
        +   '</div>';
    }

    OptionBox.prototype.showBox = function(options) {
        var view = '';

        for (var i = 0, l = options.length; i < l; i ++) {
            var template = this.choiceTemplate;

            template = template.replaceAll('{{id}}', options[i].id);
            template = template.replaceAll('{{price}}', options[i].price);
            template = template.replaceAll('{{title}}', options[i].title);
            template = template.replaceAll('{{size}}', options[i].size);

            view = view + template;
        }

        this.box = this.box.replace('{{heading}}', 'Choose One');

        return this.box.replace('{{view}}', view);
    };

    OptionBox.prototype.showOptionValues = function(options) {
        var box = this.box;
        var view = '';

        options.forEach(function (option) {
            view += this.view;
            view = view.replace('{{heading}}', option.title);

            var template = '';
            option.values.forEach(function (value) {
                template += option.choice_mode === 0 ? this.singleOptionTemplate:this.multipleOptionTemplate;
                template = template.replaceAll('{{id}}', value.id);
                template = template.replaceAll('{{title}}', value.title);
                template = template.replaceAll('{{price}}', value.default_price);
            }.bind(this));
            var required = option.required ? 'required':'';
            template = template.replaceAll('{{required}}', required);
            view = view.replace('{{template}}', template);
        }.bind(this));

        return box.replace('{{view}}', view);
    };

    OptionBox.prototype.getItem = function() {
        return this.item;
    };

    OptionBox.prototype.setItem = function(item) {
        this.item = item;
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.OptionBox = OptionBox;
})(window);
