<?php

$con = mysqli_connect("localhost", "root", "12345678", "app");
//mysql_query($con, "INSERT INTO product VALUES(1, "pen", 150, 1)");

$sql = "SELECT * FROM product";
$query = mysqli_query($con, $sql);
while ($data = mysqli_fetch_array($query)) {
    echo "name: ".$data["product_name"]." id: ".$data["id_product"]." price: ".$data["price"]."
    <a onclick='func_del()' href='delete.php?id=".$data['id_product']."'> delete</a>
    <a onclick='func_edit()' href='edit.php?id=".$data['id_product']."'> edit</a>
    <br>";
}
// ".$data["product_name"]."
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>DATABASE TESTING</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'> 
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

    <script type="text/javascript" src="test.js"></script>
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