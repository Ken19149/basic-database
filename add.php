<?php

$con = mysqli_connect("localhost", "root", "123456789", "app");

echo $id = $_POST["id"];
echo $product_name = $_POST["product_name"];
echo $price = $_POST["price"];
echo $status = $_POST["status"];

mysqli_query($con, "INSERT INTO product VALUES($id, '$product_name', $price, $status);");

echo "<script language='javascript'>";
echo "location='index.php'";
echo "</script>";

?>