<?php
session_start();
$u_email=$_SESSION['user'];

include('dc.php');
include('reviewrmse.php');
$q=mysqli_query($con,"select * from tb_keyword");
$r=mysqli_num_rows($q);
while($array=mysqli_fetch_array($q))
	{
	$str=$array[2];
	$id=$array[0];
	$rr=rms($str);
	$q1=mysqli_query($con,"update tb_keyword set rmse='$rr' where id='$id'");
	echo rms($rr)."<br>";
}
	
	?>	