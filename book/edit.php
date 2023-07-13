<?php 

$id_post = $_GET["id"];
$con = mysqli_connect("localhost", "root", "12345678", "midterm");
$con->set_charset("utf8");

$sql = "SELECT * FROM chavangkon WHERE id_post = $id";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);

echo "<div class='container'><ul class='list-group'>";
echo "<li class='list-group-item active'>Book List</li>";
echo "<li class='list-group-item'>Name: ",$data["book_name"],"</li>";
echo "<li class='list-group-item'>Author: ",$data["author"], "</li>";
echo "<li class='list-group-item'>Published Date: ",$data["date"], "</li>";
echo "</li></ul></div>";
 ?>

 <!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>EDIT BOOK DATA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="edit_process.php" method="post">
            <br>
            <input type="hidden" name="id" value="<?php echo $data['id_post'] ?>"><br>

            Book Title: <input type="text" class="form-control" name="book_name" value="<?php $data['book_name'] ?>"><br>
            Author: <input type="text" class="form-control" name="author" value="<?php $data['author'] ?>"><br>
            Published Date: <input type="text" class="form-control" name="date" value="<?php $data['date'] ?>"><br>
            Status: <input type="text" class="form-control" name="status" value="<?php $data['status'] ?>"><br>
            <input type="submit" value="edit info" class="btn btn-success">
            <a href="index.php" type="text" class="btn btn-danger">cancel</a>
        </form>
    </div>  
</body>
</html>