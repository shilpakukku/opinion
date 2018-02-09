<?php
include('dc.php');
extract($_POST);
$pass=md5($password);
$q=mysqli_query($con,"insert into tb_login(email,password,u_type)values('$email','$pass',2)")or die(mysqli_error($con));
$s=mysqli_query($con,"insert into tb_regist(name,phone,email,dob,address,pincode)values('$name','$phone','$email','$dob','$address','$pincode')") or die(mysqli_error($con));
header('location:registration.php');
?>

