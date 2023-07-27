<?php  

$con = mysqli_connect("localhost","root", "12345678", "app");


$user = $_POST['username'];
$pass = $_POST['password'];
$pass2 = $_POST['confirm-password'];
$fullname = $_POST['fullname'];

if ($pass == $pass2) {
	mysqli_query($con, "INSERT INTO user(user, pass, fullname, status) VALUES('$user', '$pass', '$fullname', 0);");
	echo "<script language='javascript'>";
	echo "alert('register successful $user :)');";
	echo "location='index.php'";
	echo "</script>";
} else {
	echo "<script language='javascript'>alert('password is not the same');location='register.php'</script>";
}

?>
