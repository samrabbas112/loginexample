<?php
session_start();
require_once 'db.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query = "SELECT FROM user where username='$username' && password='$password'";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
if($num==1)
{
$_SESSION['username']=$username;
header("location:home.php");
}
else{
	header("loaction:login.php");
}
?>