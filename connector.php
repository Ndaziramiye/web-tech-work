<?php
$server="localhost";
$user="root";
$password=" ";
$db="information_management";
$fname=$_POST("fname");
$lname=$_POST("lname");
$email=$_POST("email");
$password=$_POST("password");
$cpassword=$_POST("confirm_password");

$con=mysqli_connect($server,$user,$password,$db);
$sql="insert into artist(ID,first_name,last_name,email,password) VALUES('1','$fname','$lname','$email','$password');";
$result=mysqli_query($con,$sql);


?>