angular.module('justmenu.cart.templates', [])

.run(['$templateCache', function ($templateCache) {
    $templateCache.put('cart.html',
           ' <div data-justmenu-cart>'+
           '     <div class="cart-heading">'+
           '         <button ng-click="cart.empty()" id="empty-cart" class="icon-trash" type="button"></button>'+
           '     </div>'+
           '     <div class="cart-body">'+
           '         <ul id="cart-contents">'+
           '             <li ng-show="!cart.cart.length && !cart.lastCart.length">Nothing in cart.</li>'+
           '             <li ng-repeat="item in cart.cart">'+
           '                 <button type="button" ng-click="cart.decreaseQuantity(item)" class="icon-down-open"><span></span></button>'+
           '                 <button type="button" ng-click="cart.increaseQuantity(item)" class="icon-up-open"><span></span></button>'+
           '                 <span class="quantity">{{ item.quantity }}</span> {{ item.title }} ({{ item.size }}) <ul data-options><li ng-repeat="option in item.selected_options">{{ option.title }} <span>+{{ option.price | currency }}</span></li></ul>'+
           '                 <span>${{ item.price }}</span>'+
           '             </li>'+
           '             <div ng-show="cart.lastCart.length">'+
           '                 <p><span></span> You just emptied your cart. Would you like to <button type="button" ng-click="cart.undoEmpty()" id="undo-empty-cart" class="jm-btn">undo?</button></p>'+
           '             </div>'+
           '         </ul>'+
           '     </div>'+
           '     <div class="cart-footer">'+
           '         <ul id="cart-totals">'+
           '             <li>Sub-Total <span>{{ cart.total() | currency }}</span></li>'+
           '             <li>Tax <span>$0.00</span></li>'+
           '             <hr>'+
           '             <li>Total <span>{{ cart.total() | currency }}</span></li>'+
           '         </ul>'+
           '     </div>'+
           ' </div>');
}]);
