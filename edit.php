<?php 

$id = $_GET["id"];
$con = mysqli_connect("localhost", "root", "12345678", "app");

$sql = "SELECT * FROM product WHERE id_product = $id";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);

echo "name: ",$data["product_name"],"<br>";
echo "price: ",$data["price"];

 ?>

 <!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>DATABASE TESTING</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel='icon' href='favicon.ico' type='image/x-icon'> 
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

    <script type="text/javascript" src="test.js"></script>
</head>

<body>
    <div class="container">
        <form action="edit_process.php" method="post">
            <br>
            <input type="hidden" name="id" value="<?php echo $data['id_product'] ?>"><br>

            Product Name: <input type="text" class="form-control" name="product_name" value="<?php $data['product_name'] ?>"><br>
            Price: <input type="text" class="form-control" name="price" value="<?php $data['price'] ?>"><br>
            Status: <input type="text" class="form-control" name="status" value="<?php $data['status'] ?>"><br>
            <input type="submit" value="edit info" class="btn btn-success">
            <a href="index.php" type="text" class="btn btn-danger">cancel</a>
        </form>
    </div>  
</body>
</html>