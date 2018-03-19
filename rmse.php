<?php
session_start();
$u_email=$_SESSION['user'];
function rms()
{
include('dc.php');
$q=mysqli_query($con,"select * from tb_review");
$r=mysqli_num_rows($q);
while($array=mysqli_fetch_array($q))
	{
	
	
$query=mysqli_query($con,"select * from tb_review where u_email='$u_email' ");
$result=mysqli_num_rows($query);


$query1=mysqli_query($con,"select * from tb_rate where u_email='$u_email' ");
$result1=mysqli_num_rows($query1);

}
 $review=$result;
$rate=$result1;
$rr=($review-$rate)*($review-$rate)/$r;
$f=sqrt($rr);
$final=round($f,2);
echo $final;
return $final;
}
?>