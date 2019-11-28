$(document).ready(function(){
    $("select#add-select").change(function(){
        var add = $(this).children("option:selected").val();
        $(this).siblings("form.add").css("display", "none");
        $(this).siblings("form#add-" + add).css("display", "block");
    })
});
$(document).ready(function(){

    $(".add-product-category").change(function(){
        console.log($(".add-product-category").find('option:selected').val());
    })
});