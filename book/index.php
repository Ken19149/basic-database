<?php

$con = mysqli_connect("localhost", "root", "12345678", "midterm");
$con->set_charset("utf8");
//mysql_query($con, "INSERT INTO product VALUES(1, "pen", 150, 1)");

$sql = "SELECT * FROM Chavangkon";
$query = mysqli_query($con, $sql);

echo "<div class='container'>

<ul class='list-group'>
<li class='list-group-item active'>Book List</li>";
while ($data = mysqli_fetch_array($query)) {
    echo "<li class='list-group-item'>ID: ".$data["id_post"]." | Name: ".$data["book_name"]." | Author: ".$data["author"]." | Date: ".$data["date"]."
    <a onclick='func_edit()' class='btn btn-warning' href='edit.php?id=".$data['id_post']."'> edit</a>
    <a onclick='func_del()' class='btn btn-danger' href='delete.php?id=".$data['id_post']."'> delete</a>
    </li>";
}
echo "</ul></div>";
// ".$data["product_name"]."
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>DATABASE TESTING</title>

    <style type="text/css">
    	.btn-blue {
    		background-color: #00ffff;
    		color: #0000ff;
    		width: 150px;
    		height: 50px;
    		font-size: 20px;
    		border-radius: 10px;
    		margin-top: 20px;
    	}
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <link rel='icon' href='favicon.ico' type='image/x-icon'> 
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

    <script type="text/javascript" src="test.js"></script>
</head>

<body>
	<div class="container">
	    <form action="add.php" method="post">
	        <br>
	        Book Title: <input type="text" name="book_name" class="form-control"><br>
	        Author: <input type="text" name="author" class="form-control"><br>
	        Published Date: <input type="text" name="date" class="form-control"><br>
	        Status: <input type="text" name="status" class="form-control"><br>
	        <input type="submit" value="insert info" class="btn btn-primary">
	        <!-- <input type="button" value="register" class="btn-blue" style="background-color: #0099ff;"> -->
	        <input type="submit" value="register" class="btn btn-success">
	    </form>
    </div>
</body>
</html>