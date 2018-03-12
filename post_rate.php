<?php
session_start();
include('dc.php');
$email=$_SESSION['user'];
extract($_POST);
$query=mysqli_query($con,"insert into tb_rate(p_id,u_email,p_rate) values('$pid','$email','$rate')");
echo mysqli_error($con);
