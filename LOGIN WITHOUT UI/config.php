<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"info");
if (!$connection)
{
    die("not connected");
}?>