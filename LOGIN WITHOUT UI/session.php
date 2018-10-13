<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"info");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($connection,"select userid from details where userid='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['userid'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location:index.php'); // Redirecting To Home Page
}
?>