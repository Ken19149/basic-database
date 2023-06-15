<?php 

$id = $_GET["id"];
$con = mysqli_connect("localhost", "root", "12345678", "app");

$sql = "SELECT * FROM product";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);

echo "Original<br>";
echo "name: ",$data["product_name"],"<br>";
echo "price: ",$data["price"];

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
    <form action="edit_process.php" method="post">
        <br>
        <input type="hidden" name="id" value="<?php echo $data['id_product'] ?>"><br>

        Product Name: <input type="text" name="product_name" value="<?php $data['product_name'] ?>"><br>
        Price: <input type="text" name="price" value="<?php $data['price'] ?>"><br>
        Status: <input type="text" name="status" value="<?php $data['status'] ?>"><br>
        <input type="submit" value="edit info">
    </form>
</body>
</html>