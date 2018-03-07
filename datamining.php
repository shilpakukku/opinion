
<?php
session_start();
$u_email=$_SESSION['user'];
include('dc.php');
$query=mysqli_query($con,"select * from tb_review where u_email='$u_email' ");
$result=mysqli_num_rows($query);

while($array=mysqli_fetch_array($query))
	{
		$review=$array['p_review'];
	$pid=$array['p_id'];
	
$query1=mysqli_query($con,"select * from tb_product where p_id='$pid' ");
$result1=mysqli_num_rows($query1);
while($array1=mysqli_fetch_array($query1))
	{
	$cat[]=$array1[1];
	
}
	}
$cat1=count($cat);
echo $cat1;
?>