<!doctype html>
<html>
<head>
	<?php
	session_start()
	
	?>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		include('dc.php');
	$username=$_SESSION['user'];
	echo $username;
	
	
	?>
</body>
</html>