	<?php
	session_start();
	include('dc.php');
	 $username=$_SESSION['user'];
	$q=mysqli_query($con,"select * from tb_regist where email='$username'");
	$array=mysqli_fetch_array($q);
	?>
	<form method="post" action="post_edit.php">
		<table border="1">
	<tr><td>Name</td><td><input type="text" name="name" value="<?php echo $array['name'];?>" required></td></tr>
			<tr><td>E-Mail</td><td><input type="text" value="<?php echo $array['email'];?>" readonly></td></tr>
			<tr><td>Date Of Birth</td><td><input type="date" name="dob" value="<?php echo $array['dob'];?>"/></td></tr>
			<tr><td>Phone</td><td><input type="text" name="phone" value="<?php echo($array['phone']);?>"/></td></tr>
			<tr><td><input type="submit" value="Edit Profile"></td></tr>
		</table>
			</form>
	
	
	
	
	
	
	
	
