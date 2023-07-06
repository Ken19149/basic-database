<?php

$con = mysqli_connect("localhost", "root", "12345678", "midterm");
$con->set_charset("utf8");

echo $id_post = $_POST["id_post"];
echo $book_name = $_POST["book_name"];
echo $author = $_POST["author"];
echo $date = $_POST["date"];
echo $status = $_POST["status"];

mysqli_query($con, "INSERT INTO Chavangkon(book_name, author, date, status) VALUES('$book_name', '$author', '$date', $status);");

echo "<script language='javascript'>";
echo "location='index.php'";
echo "</script>";

?>
