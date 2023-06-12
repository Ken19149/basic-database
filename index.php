<?php

$con = mysqli_connect("localhost", "root", "123456789", "app");
//mysql_query($con, "INSERT INTO product VALUES(1, "pen", 150, 1)");

$sql = "SELECT * FROM product";
$query = mysqli_query($con, $sql);
while ($data = mysqli_fetch_array($query)) {
    echo $data["product_name"]." ".$data["price"]."<br>";
}

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>DATABASE TESTING</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'> 
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
</head>

<body>
    <form action="add.php" method="post">
        <br>
        Input ID: <input type="text" name="id"><br>
        Product Name: <input type="text" name="product_name"><br>
        Price: <input type="text" name="price"><br>
        Status: <input type="text" name="status"><br>
        <input type="submit" value="insert info">
    </form>
</body>
</html>