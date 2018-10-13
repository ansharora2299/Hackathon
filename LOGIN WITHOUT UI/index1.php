<?php
require 'config.php';
$customer_name=$_POST["customer_name"];
$phone_number=$_POST["phone_number"];
$email_address=$_POST["email_address"];
$gender= $_POST["gender"];
$dob=$_POST["dob"];
$password=$_POST["password"];
$ailment=implode(',',$_POST["ailment"]);
$sql="insert into details (customer_name,phone_number,email_address,gender,dob,password,ailment) values('$customer_name',$phone_number,'$email_address','$gender',$dob,'$password','$ailment')";
$i=mysqli_query($connection,$sql);
if($i>0)
{
header("location:index.php");
}
   // check die part in this 
   //$id= mysqli_insert_id($connection);
   //echo $id;
   //redirect request to another page
?>