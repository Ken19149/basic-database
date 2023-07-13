<?php

$id = $_GET["id"];
$con = mysqli_connect("localhost", "root", "12345678", "midterm");
$con->set_charset("utf8");

mysqli_query($con, "DELETE FROM chavangkon WHERE id_post = $id");

echo "<script language='javascript'>location='index.php';</script>"
?>