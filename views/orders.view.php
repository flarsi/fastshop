<?php
    require_once 'layouts/header.view.php'
?>

    <!-- content-section-starts -->
    <div class="content">
        <div class="ordering-section" id="Order">
            <div class="container">
                <?php
                var_dump($orders);
                    if(!empty($orders)) {
                            foreach ($orders as $key => $order) {
                                echo "<div class='container order wow fadeInLeft animated justify-content-center'>";
                            foreach ($order as $product){
                                echo "<div class='product row col6'>";
                                require 'layouts/order.view.php';
                                echo "</div>";
                            }
                                echo "<br><div class='total-price'></div></div><div class=\"Popular-Restaurants-grid wow fadeInRight\" data-wow-delay=\"0.4s\"></div>";
                            }
                            echo "<input type='button' id='create-order'>";
                    }
                ?>
    <script src=".././public/js/order.js"></script>
<?php
//require_once 'layouts/footer.view.php';
    ?>