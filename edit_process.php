<?php

$con = mysqli_connect("localhost", "root", "12345678", "app");

echo "id: ",$id = $_POST["id"],"<br>";
echo "name: ",$product_name = $_POST["product_name"],"<br>";
echo "price: ",$price = $_POST["price"],"<br>";
echo "status: ",$status = $_POST["status"],"<br>";

mysqli_query($con, "UPDATE product SET product_name = '$product_name', price = $price, status = $status WHERE id_product = $id");

echo "<script language='javascript'>";
echo "location='index.php'";
echo "</script>";

?>