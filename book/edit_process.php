<?php

$con = mysqli_connect("localhost", "root", "12345678", "midterm");
$con->set_charset("utf8");

echo "Id: ",$id = $_POST["id"],"<br>";
echo "Book Title: ",$book_name = $_POST["book_name"],"<br>";
echo "Author: ",$author = $_POST["author"],"<br>";
echo "Published Date: ",$date = $_POST["date"],"<br>";
echo "Status: ",$status = $_POST["status"],"<br>";

mysqli_query($con, "UPDATE chavangkon SET book_name = '$book_name', author = '$author', date = '$date', status = $status WHERE id_post = $id");

echo "<script language='javascript'>";
echo "location='index.php'";
echo "</script>";

?>