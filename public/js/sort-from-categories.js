var product = $(".tbody").find("tr");

$(document).ready(function(){
    $("select#products-select").change(function(){
        $(".tbody").find("tr").css("display", "table-row");
        var categoreId = $(this).children("option:selected").val();
        $(".tbody").find("tr").each(function () {
            if(!$(this).hasClass("category_id-" + categoreId)){
                $(this).css("display", "none");
            }
        });
    })
});
