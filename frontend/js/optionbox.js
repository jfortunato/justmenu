(function(window){
    'use strict';

    function OptionBox() {
        this.box
        =   '<div class="modal">'
        +       '<div class="modal-body">'
        +           '{{view}}'
        +       '</div>'
        +       '<div class="modal-footer">'
        +           '<button type="button">Done</button>'
        +       '</div>'
        +   '</div>';

        this.view
        =   '<h3>{{heading}}</h3>'
        +   '{{template}}';

        this.choiceTemplate
        =   '<div data-item="{{id}}">'
        +       '<div data-price="{{price}}">'
        +           '<p data-title="{{title}}">{{title}} <a href="#" data-select-size="{{size}}">Select</a></p>'
        +       '</div>'
        +       '<input type="hidden" name="item-options" value="{{options}}" />'
        +   '</div>';

        this.singleOptionTemplate
        =   '<div data-option-id="{{id}}">'
        +       '<p data-title="{{title}}">{{title}} (+${{price}}) <input data-price="{{price}}" type="radio" name="{{option}}" value="{{title}}" {{required}} /></p>'
        +   '</div>';

        this.multipleOptionTemplate
        =   '<div data-option-id="{{id}}">'
        +       '<p data-title="{{title}}">{{title}} (+${{price}}) No <input data-price="0" type="checkbox" name="{{option}}" value="no {{title}}" /> Add <input data-price="{{price}}" type="checkbox" name="{{option}}" value="add {{title}}" /></p>'
        +   '</div>';
    }

    OptionBox.prototype.showBox = function(options) {
        var view = this.view;

        for (var i = 0, l = options.length; i < l; i ++) {
            var template = this.choiceTemplate;

            template = template.replaceAll('{{id}}', options[i].id);
            template = template.replaceAll('{{price}}', options[i].price);
            template = template.replaceAll('{{title}}', options[i].title);
            template = template.replaceAll('{{size}}', options[i].size);
            var availableOptionIds = [];
            options[i].available_options.forEach(function (option) {
                availableOptionIds.push({id:option.id, required:option.required, size: option.size});
            });
            availableOptionIds = this.escapeHtml(JSON.stringify(availableOptionIds));
            template = template.replaceAll('{{options}}', availableOptionIds);

            view = view + template;
        }

        view = view.replace('{{heading}}', 'Choose One');
        view = view.replace('{{template}}', '');

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
                template = template.replaceAll('{{option}}', option.title);
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

    OptionBox.prototype.escapeHtml = function(text) {
        return text
            .replaceAll(/&/g, "&amp;")
            .replaceAll(/</g, "&lt;")
            .replaceAll(/>/g, "&gt;")
            .replaceAll(/"/g, "&quot;")
            .replaceAll(/'/g, "&#039;");
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.OptionBox = OptionBox;
})(window);
