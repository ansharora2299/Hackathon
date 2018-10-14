<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"info");
if (!$connection)
{
    die("not connected");
}
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
$sql1=mysqli_query($connection,"select userid from details where phone_number='$phone_number' AND email_address='$email_address'");
$row=mysqli_fetch_assoc($sql1);
$row1=$row['userid'];
echo $row1;
//echo "<script type='text/javascript'>alert('$row1');</script>";
header("location:index.php");
}
?>