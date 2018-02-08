<?php
session_start();
include('dc.php');
extract($_POST);
$password=md5($password);
$query=mysqli_query($con,"select * from tb_login where email='$email' and password='$password'");
$result=mysqli_num_rows($query);
if($result==1){
	$_SESSION['user']=$email;
	header('location:home.php');
}
else{
	?>

<script>
	alert("invalid");
	window.location="login.php";
</script>


<?php
}

	
	