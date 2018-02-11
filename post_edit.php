<?php
	session_start();
	$username=$_SESSION['user'];
	include('dc.php');
	extract($_POST);
	$query1=mysqli_query($con,"update tb_regist set name='$name',dob='$dob',phone='$phone' where email='$username'");
header('location:home.php');
	
	?>
