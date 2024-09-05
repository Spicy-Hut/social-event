<?php
    include "dp.php";
    $cname=$_POST["compusname"];
    $caddress=$_POST["address"];
    $cperson=$_POST["contect"];
    $cemail=$_POST["email"];
    $cphone=$_POST["number"];
    $cpassword=$_POST["campuspassword"];


    $sql="insert into school (compusname,address,contect,email,number,campuspassword)values('$cname','$caddress','$contect,'$cemail','$cphone','$cpassword') ";
    $result=mysqli_query($con,$sql);
    if($result){
       header("location:student_rigister.php");
    }else{
      echo "error";
    }
// php code end

?>