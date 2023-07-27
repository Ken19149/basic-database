<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<form action='login_process.php' method='post'>
		<div class="container" style="margin-top: 50px; background-color: whitesmoke; padding: 50px;">
			<div style="font-size: 25px; margin-bottom: 20px;" align="center">login</div>
			<input type="text" name="user" class="form-control" placeholder="Username">
			<input type="password" name="pass" class="form-control" placeholder="Password" style="margin-top:20px; margin-bottom: 20px; ">
			<input type="submit" class="btn btn-primary" value="login">
	    	<a href="register.php" class="btn btn-success">register</a>
		</div>
	</form>
</body>
</html>