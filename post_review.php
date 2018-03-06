<?php
session_start();
include('dc.php');
$email=$_SESSION['user'];
extract($_POST);
$query=mysqli_query($con,"insert into tb_review values(NULL,'$pid','$email','$txt_review')");
echo mysqli_error($con);
//header('location:review.php');
	 