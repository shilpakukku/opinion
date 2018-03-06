<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post" acton="">
	<table border="1">
		<tr><td><input type="text"  name="search"</td></tr>
		<tr><td><input type="submit" value="search" name="btn"></td></tr>
		</table>
	</form>
	<?php
	session_start();
	$username=$_SESSION['user'];
	include('dc.php');
	
		if(isset($_POST['btn']))
	{
		$search=$_POST['search'];
	
	$q=mysqli_query($con,"select * from tb_product where p_name  like '%$search%' ");
		while($arr=mysqli_fetch_array($q)){
			$name=$arr['p_name'];
			$pid=$arr['p_id'];
		?>
	<a href="product.php".php?e=<?php echo $pid; ?>"><?php echo $name; ?></a>
	<?php 
	}
	}
?>
			
</body>
</html>