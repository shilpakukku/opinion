<?php
session_start();
include('dc.php');
extract($_POST);
$password=md5($password);

$query2=mysqli_query($con,"select * from tb_login where email='$email' and password='$password' and u_type=1");
$result2=mysqli_num_rows($query2);
$query=mysqli_query($con,"select * from tb_login where email='$email' and password='$password' and u_type=2");
$result=mysqli_num_rows($query);
if($result==1){
	$_SESSION['user']=$email;
	header('location:home.php');
}
else if($result2==1){
	header('location:admin.php');
}
else{
	?>
<script>
alert("Invalid");
	window.location="login.php";




</script>


<?php
	
}
	
	