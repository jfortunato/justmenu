(function(window, App){
	'use strict';

    function JustMenu(name) {
        this.storage = new App.Storage(name);
        this.cart = new App.Cart(this.storage);
        this.template = new App.Template();
        this.view = new App.View(this.template);
        this.controller = new App.Controller(this.cart, this.view);
    }

    var justmenu = new JustMenu('justmenu-cart');

	window.addEventListener('load', function () {
        justmenu.controller.showAll();
	}.bind(this));

})(window, JustMenu);
