(function(window){
	'use strict';

    function Storage(name) {
        this.dbName = name;

        if (!localStorage[this.dbName]) {
            var data = {
                cart: []
            };

            localStorage[this.dbName] = JSON.stringify(data);
        }
    }

    Storage.prototype.findAll = function() {
        return JSON.parse(localStorage[this.dbName]).cart;
    };

    Storage.prototype.save = function(updateData) {
        var data = JSON.parse(localStorage[this.dbName]);
        var cart = data.cart;

        // give the item a unique id in the cart
        updateData.id = new Date().getTime();

        cart.push(updateData);
        localStorage[this.dbName] = JSON.stringify(data);
    };

    Storage.prototype.remove = function(id) {
		var data = JSON.parse(localStorage[this.dbName]);
        var cart = data.cart;
        
		for (var i = 0; i < cart.length; i++) {
			if (cart[i].id == id) {
				cart.splice(i, 1);
				break;
			}
		}

		localStorage[this.dbName] = JSON.stringify(data);
    };

    window.JustMenu = window.JustMenu || {};
    window.JustMenu.Storage = Storage;
})(window);
