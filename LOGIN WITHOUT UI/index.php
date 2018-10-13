<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>User Id :</label>
<input id="name" name="username" placeholder="userid" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br>
<input name="submit" type="submit" value="Login"><br>
<span><?php echo $error; ?></span><br>
<a style=" align-content: center" href="signup.php">New User! Sign up</a>
</form>
</div>
</div>
</body>
</html>