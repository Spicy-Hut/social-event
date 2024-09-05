<?php
$con=mysqli_connect("localhost","root","","participants");

if($con){
 echo "connect";
}else{
 echo "error";
}
?>