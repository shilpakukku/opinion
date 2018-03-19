<?php
session_start();
include('dc.php');
include('reviewtest.php');
$username=$_SESSION['user'];
	
$res=stopwords();
print_r($res);

	?>
