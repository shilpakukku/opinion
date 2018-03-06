
	<?php
	session_start();
include('dc.php');
	include('reviewtest.php');
	$username=$_SESSION['user'];
	echo $username;
$res=stopwords();
print_r($res);
	?>
