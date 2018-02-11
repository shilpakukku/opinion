<?php
session_start();
include('dc.php');
$email=$_SESSION['user'];
extract($_POST);
$pass=md5($password);
$query1=mysqli_query($con,"update tb_login set password='$pass' where email='$email'");
if($query1){
	?>
<script>
		alert("Done")
	window.location="home.php";
	</script>
	<?php
}
else{
	?>
<script>
alert("Failed")
window.location="changepassword.php";

</script>
<?php
	
}

?>