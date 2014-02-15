(function(window){
    'use strict';

    NodeList.prototype.forEach = Array.prototype.forEach;

	window.$live = (function () {
		var eventRegistry = {};

		var globalEventDispatcher = function (e) {
			var targetElement = e.target;

			if (eventRegistry[e.type]) {
				eventRegistry[e.type].forEach(function (entry) {
					var potentialElements = document.querySelectorAll(entry.selector),
						hasMatch = Array.prototype.indexOf.call(potentialElements, targetElement) >= 0;

					if (hasMatch) {
						entry.handler(e);
					}
				});
			}
		};

		return function (selector, event, handler) {
			if (!eventRegistry[event]) {
				document.documentElement.addEventListener(event, globalEventDispatcher, true);

				eventRegistry[event] = [];
			}

			eventRegistry[event].push({
				selector: selector,
				handler: handler
			});
		};
	}());

    window.$closest = function (element, selector) {
        if (!element.parentNode || element.parentNode === document) {
            return;
        }

        if (element.parentNode.matches(selector)) {
            return element.parentNode;
        }

        return window.$closest(element.parentNode, selector);
    };

    String.prototype.replaceAll = function(search, replace) {
        if (replace === undefined) {
            return this.toString();
        }

        return this.split(search).join(replace);
    };

    Element.prototype.matches = Element.prototype.matches || 
        Element.prototype.matchesSelector       ||
        Element.prototype.mozMatchesSelector    ||
        Element.prototype.msMatchesSelector     ||
        Element.prototype.oMatchesSelector      ||
        Element.prototype.webkitMatchesSelector ||
        function (selector) {
            var node = this, nodes = (node.parentNode || node.document).querySelectorAll(selector), i = -1;

            while (nodes[++i] && nodes[i] != node);

            return !!nodes[i];
        };

})(window);
