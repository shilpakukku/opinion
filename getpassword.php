<?php
session_start();
include('dc.php');
$email=$_SESSION['user'];
$pass=$_GET['q'];
$pass=md5($pass);
$q=mysqli_query($con,"select * from tb_login where email='$email' and password='$pass'");
if(mysqli_num_rows($q)==1)
{
	
}
else{
	echo "Incorrect Current Password";
	?>
	<input type="hidden" name="val" id="p" value="False">
<?php
}
?>