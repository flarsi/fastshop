var tr = $(".number");
var numb = tr.children();
var hprice = tr.siblings(".price").children();
var hweight = tr.siblings(".weight").children();
var price = tr.siblings(".price");
var weight = tr.siblings(".weight");


$(".number").children().change(function () {
    for (var i = 0; i < numb.length; i++) {

        if(numb[i].value != '' && numb[i].value > 0) {

            price[i].innerHTML = parseInt(hprice[i].value)*(numb[i].value) + ".00 grn." +
                "<input type=\"hidden\" name=\"price\" value=" + parseInt(hprice[i].value) + ">";
            weight[i].innerHTML = parseFloat(hweight[i].value)*(numb[i].value) + " .kg" +
                "<input type=\"hidden\" name=\"weight\" value=" + parseFloat(hweight[i].value) + ">";
        }
    }
});

