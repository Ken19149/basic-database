<?php

$id = $_GET["id"];

$con = mysqli_connect("localhost", "root", "12345678", "app");

mysqli_query($con, "DELETE FROM product WHERE id_product = $id");

echo "<script language='javascript'>location='index.php';</script>"
?>