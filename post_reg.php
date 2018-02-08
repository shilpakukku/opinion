<?php
include('dc.php');
extract($_POST);
$q=mysqli_query($con,"insert into tb_regist(name,phone,email,dob,address,pincode) values('$name','$phone','$email','$dob','$address','$pin')");
mysqli_error($con);
$s=mysqli_query($con,"insert into tb_login(email,password)values('$email,$password,2)");
//header('location:registration.php');
?>

