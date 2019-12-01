<?php
    require_once 'layouts/header.view.php'
?>
    <!-- content-section-starts -->
    <div class="content">
        <div class="ordering-section" id="Order">
            <div class="container">
    <div class="col-12 col-md-6" style="float: left">
        <?php if(!empty($orders)): ?>
            <div class="form_details">
<!--                --><?php //vardump($orders)?>
                <?php foreach ($orders as $order) : ?>
                <h1 class="table wow fadeInRight">Order id №<?=$order[0]['order_id']?></h1>
                <table id="order-<?=$order[0]['order_id']?>" class="table wow fadeInRight" align="center">
                    <thead>
                    <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Weight</td>
                            <td>Created at</td>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($order as $product) : ?>
                            <tr>
                                <td class="order_product_name"><?= $product["product_name"] ?></td>
                                <td class="order_product_price"><?= $product["price"] ?> grn.</td>
                                <td class="order_product_weight"><?= $product["weight"] ?> kg.</td>
                                <td class="order_created_at"><?= $product["order_created_at"] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Total price</td>
                        <td class="total_price">++</td>
                    </tr>
                    </tfoot>
                </table>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
    <input id="hidd" type="hidden" value="1">
    <script src=".././public/js/order.js"></script>
<?php
require_once 'layouts/footer.view.php';
    ?>