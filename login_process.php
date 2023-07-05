<?php  

$con = mysqli_connect("localhost","root", "123456789", "app");


$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysqli_query($con,"SELECT * FROM user WHERE user =  '$user' AND pass = '$pass'");

$num_query = mysqli_num_rows($query);


if ($num_query == 1) {
	echo "<script language='javascript'>";
	echo "location='index.php'";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "location='login.php'";
	echo "</script>";
}

?>