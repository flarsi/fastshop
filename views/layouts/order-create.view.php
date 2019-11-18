<?php
//echo $product["category_name"] . "<br>";
echo "<div class='" . $product["category_name"]  . " col'>". $product["category_name"] . "</div>";
echo "<div class='product_name col'>" . $product["product_name"] . "</div>";
echo "<div class='product_id col'>" . $product["product_id"] . "</div>";
echo "<div class='weight col'>" . $product["weight"] . "</div>";
echo "<div class='price col'>" . $product["price"] . "</div>";
echo "<div class='product_code col'>" . $product["code"] . "</div>";
echo "<div class='" . $product["product_status_name"]  . " col'>" . $product["product_status_name"] . "</div>";
echo "<input type='checkbox' class='choose_product' name='" . $product["product_id"] . "' value='" . $product["product_id"] . "'>";
echo "<input type='text' class='number_of_goods' value='1'>";
echo "<input type='hidden' class='' value='1'>";
echo "<input type='hidden' class='product_id' value='1'>";

