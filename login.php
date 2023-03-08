<?php
if( isset($_POST["submit"]) ){
	if($_POST["u"] == "admin" && $_POST["p"] == "adminn"){
		header("Location: admin.php");
		exit;
	}else{
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" href="./css/login.css" />
</head>
<body>
<div class="login">
	<h1>Starcorps</h1>
	<h2>Login</h2>
    <form method="post">
    	<input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">Login.</button>
    </form>
</div>
</body>
</html>