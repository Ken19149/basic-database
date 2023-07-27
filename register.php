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
	    <form action="register_process.php" method="post">
	        <br>
	        Username: <input type="text" name="username" class="form-control"><br>
	        Full Name: <input type="text" name="fullname" class="form-control"><br>
	        Password: <input type="password" name="password" class="form-control"><br>
	        Confirm Password: <input type="password" name="confirm-password" class="form-control"><br>
	        <!-- <input type="button" value="register" class="btn-blue" style="background-color: #0099ff;"> -->
	        <input type="submit" class="btn btn-primary" value="register">
	        <a href="login.php" class="btn btn-success">login</a>
	    </form>
		
    </div>
</body>
</html>