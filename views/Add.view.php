<?php
require_once 'layouts/header.view.php';
?>

<?php //var_dump($all) ?>
    <div class="container">
        <div class="col-12 wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
            <div class="row">
                <select id="add-select" multiple>
                    <option selected class="text-center" value="category">Category</option>
                    <option class="text-center" value="product">Product</option>
                </select>



                <form id="add-category" class="add form-group row" action="" method="POST">
                    <table class="table ">
                        <thead>
                        <tr>
                            <td>Category Name</td>
                            <td>Description</td>
                        </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td class="add-category-name"><input type="text"></td>
                                <td class="add-category-desc"><textarea class="textarea-desc"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"> </div>
                    <div class="sub-button wow swing animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: swing;">
                        <input type="submit" class="sub add-category" value="Send message">
                    </div>
                </form>

                <form id="add-product" class="add form-group row" action="" method="POST">
                    <table class="table ">
                        <thead>
                        <tr>
                            <td>Product Name</td>
                            <td>Weight</td>
                            <td>Price</td>
                            <td>Code</td>
                            <td>Category</td>
                            <td>Product Status</td>
                            <td>Description</td>
                        </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td class="add-product-name"><input type="text"></td>
                                <td class="add-product-weight"><input type="number"></td>
                                <td class="add-product-price"><input type="number"></td>
                                <td class="add-product-code"><input type="number"></td>
                                <td class="add-product-category">
                                    <select class="select_category" id="select_category" multiple>
                                        <?php foreach ($all['categoryes'] as $category): ?>
                                        <option class="text-center" value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class="add-product-product_status">
                                    <select  class="select_status" id="select_status" multiple>
                                        <?php foreach ($all['statuses'] as $status): ?>
                                        <option class="text-center" value="<?= $status['id'] ?>"><?= $status['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class="add-product-desc"><textarea></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"> </div>
                    <div class="sub-button wow swing animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: swing;">
                        <input type="submit" class="sub add-product" value="Send message">
                    </div>
                </form>
            </div>
        </div>
    </div>
<input id="hidd" type="hidden" value="3">
<script type="text/javascript" src="../public/js/add.js"></script>
<?php
require_once 'layouts/footer.view.php';
?>

<script>
    $("input.add-category[type=submit]").click(function (e) {
        e.preventDefault();

        let data = [];
        if($(".add-category-name").find('input[type=text]').val() != '') {
            data.push(
                {
                    name: $(".add-category-name").find('input[type=text]').val(),
                    desc: $(".add-category-desc").find('textarea').val()
                }
            );
        }
        console.log(data[0]['name']);

        $.ajax({
            type: "POST",
            url: document.location.origin + "/add/category",
            data: {
                name: data[0]['name'],
                desc: data[0]['desc']
            },
            dataType: "text",
            success: function (msg) {
                console.log("Прибыли данные: " + msg);
            }
        });
    });

    $("input.add-product[type=submit]").click(function (e) {
        e.preventDefault();

        let data = [];
        if($(".add-product-name").find('input[type=text]').val() != '' &&
            $(".add-product-price").find('input[type=text]').val() != '' &&
            $(".add-product-weight").find('input[type=text]').val() != '' &&
            $(".add-product-code").find('input[type=text]').val() != '' &&
            $(".add-product-category").find('option:selected').val() != '' &&
            $(".add-product-product_status").find('option:selected').val() != ''
        ) {
            data.push(
                {
                    name: $(".add-product-name").find('input[type=text]').val(),
                    price: $(".add-product-price").find('input[type=number]').val(),
                    weight: $(".add-product-weight").find('input[type=number]').val(),
                    code: $(".add-product-code").find('input[type=number]').val(),
                    category_id: $(".add-product-category").find('option:selected').val(),
                    status_id: $(".add-product-product_status").find('option:selected').val(),
                    desc: $(".add-product-desc").find('textarea').val()
                }
            );
        }
         console.log(data[0]['category_id']);

        $.ajax({
            type: "POST",
            url: document.location.origin + "/add/product",
            data: {
                name: data[0]['name'],
                price: data[0]['price'],
                weight: data[0]['weight'],
                code: data[0]['code'],
                category_id: data[0]['category_id'],
                status_id: data[0]['status_id'],
                desc: data[0]['desc']
            },
            dataType: "text",
            success: function (msg) {
                console.log("Прибыли данные: " + msg);
            }
        });
    });
</script>
