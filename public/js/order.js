$(document).ready(function () {
    var orders = document.getElementsByClassName('order');
    for (var i = 0; i < orders.length; i++){
        var totalPrice = 0;
        var products = orders[i].querySelectorAll('.product');
        for (var j = 0; j < orders[i].getElementsByClassName('product').length; j ++){
            var prise = products[j].querySelector('.price').innerHTML;
            totalPrice += prise*1;
        }
        orders[i].querySelector('.total-price').innerHTML = "\t total price : " + totalPrice;
        orders[i].querySelector('.total-price')
    }

    for (var i = 0; i < orders.length; i++) {
        var products = orders[i].querySelectorAll('.product');
        for (var j = 1; j < orders[i].getElementsByClassName('product').length; j++) {

            products[j].querySelector('.order_created_at').style = "display: none;";
        }
    }
});

