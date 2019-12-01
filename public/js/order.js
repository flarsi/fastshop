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

    for(var i = 0; i < $("table").length; i++){
        var prices = document.getElementsByTagName("table")[i].querySelectorAll(".order_product_price");
        var val = 0;
        for (var j = 0; j < prices.length; j++) {
            val += prices[j].innerHTML.slice(0, (prices[j].innerHTML.indexOf(' ')))*1;
        }
        var total = document.getElementsByTagName("table")[i].querySelectorAll(".total_price");
        total[0].innerHTML = val + '.00 grn.';
    }
});



