<?php
require_once 'layouts/header.view.php';
?>
<div>
    <button class="btn btn-success" form="order-form" type="submit">Create</button>
</div>

        <div class="container">
            <div class="col-12 wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                <h4><?=$title?></h4>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php if(!empty($categories)): ?>
                            <div class="form_details">
                                <select id="products-select" name="products" multiple>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-6" style="float: left">
                        <?php if(!empty($products)): ?>
                            <div class="form_details">
                                <form id="order-form" class="form-group row" action="/orders/store" method="POST">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <td>Name</td>
                                                <td>Numbers</td>
                                                <td>Price</td>
                                                <td>Weight</td>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody">
                                        <?php foreach ($products as $product) : ?>
                                            <tr class="category_id-<?= $product['category_id'] ?>" id="<?= $product['product_id'] ?>">
                                                <td><?= $product['product_name'] ?></td>
                                                <td class="number"><input id="product_id-<?= $product['product_id'] ?>" type="number" name="<?= $product['product_id'] ?>"  value=""></td>
                                                <td class="price"><?= $product['price'] ?> grn.<input type="hidden" name="price[]" value="<?= $product['price'] ?>"></td>
                                                <td class="weight"><?= $product['weight'] ?> kg.<input type="hidden" name="weight[]" value="<?= $product['weight'] ?>"></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <input type="hidden" name="user_id" value="2">
                                    <div class="clearfix"> </div>
                                    <div class="sub-button wow swing animated animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: swing;">
                                        <input type="submit" value="Send message">
                                    </div>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript" src="../public/js/create-order.js"></script>
<?php
require_once 'layouts/footer.view.php';
?>
<script>
    $("input[type=submit]").click(function (e) {
        e.preventDefault();
        console.log(document.location.origin + "/orders/store");

        var productIds = [];
        var prices = [];
        var weights = [];
        var j = 0;
        for (var i = 0; i < numb.length; i++) {
            if (numb[i].value != '') {
                productIds[j] = tr.parent().id;
                prices[j] = hprice[i].value;
                weights[j] = hweight[i].value;
                j++;
            }
        }

        $.ajax({
            type: "POST",
            url: document.location.origin + "/orders/store",
            data: {
                userId: 2,
                productIds: productIds,
                prices: prices,
                weights: weights
            },
            dataType: "text",
            success: function (msg) {
                console.log("Прибыли данные: " + msg);
            }
        });
    });
</script>

