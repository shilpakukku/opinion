<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	if(isset($_SESSION['user'])){
		session_destroy();
		header('location:login.php');
		
	}
	else{
		header('location:login.php');
	}
	?>
</body>
</html>