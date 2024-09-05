<?php
include "dp.php";
$cname=$_POST["compusname"];
$caddress=$_POST["address"];
$cperson=$_POST["contect"];
$cemail=$_POST["email"];
$cphone=$_POST["number"];
$cpassword=$_POST["compuspass"];

$sql="insert into register(address,contect,email,number,compuspass)values('$caddress','$cperson','$cemail','$cphone','$cpassword')";
$result=mysqli_query($con,$sql);
if($result){
  header("location: login.php");
}else{
 header("location: Register.php");
}
?>