<?php

$con = mysqli_connect("localhost", "root", "12345678", "app");
//mysql_query($con, "INSERT INTO product VALUES(1, "pen", 150, 1)");

$sql = "SELECT * FROM product";
$query = mysqli_query($con, $sql);

echo "<div class='container'>

<ul class='list-group'>
<li class='list-group-item active'>Database Items</li>";
while ($data = mysqli_fetch_array($query)) {
    echo "<li class='list-group-item'>name: ".$data["product_name"]." id: ".$data["id_product"]." price: ".$data["price"]."
    <a onclick='func_edit()' class='btn btn-warning' href='edit.php?id=".$data['id_product']."'> edit</a>
    <a onclick='func_del()' class='btn btn-danger' href='delete.php?id=".$data['id_product']."'> delete</a>
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
	        Input ID: <input type="text" name="id" class="form-control"><br>
	        Product Name: <input type="text" name="product_name" class="form-control"><br>
	        Price: <input type="text" name="price" class="form-control"><br>
	        Status: <input type="text" name="status" class="form-control"><br>
	        <input type="submit" value="insert info" class="btn btn-primary">
	        <!-- <input type="button" value="register" class="btn-blue" style="background-color: #0099ff;"> -->
	        <a href="login.php" class="btn btn-success">login</a>
	        <a href="register.php" class="btn btn-success">register</a>
	    </form>
		
    </div>
</body>
</html>