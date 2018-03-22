<?php
//session_start();
$u_email=$_SESSION['user'];
function rms($str)
{
include('dc.php');
$r=strlen($str);

	
$query=mysqli_query($con,"select * from tb_keyword where kcat_id=1 ");
$result=mysqli_num_rows($query);


$query1=mysqli_query($con,"select * from tb_keyword where kcat_id=2 ");
$result1=mysqli_num_rows($query1);
	




 $review=$result;
$rate=$result1;

$rr=($review-$rate)*($review-$rate)/$r;
$f=sqrt($rr);
$final=round($f,2);
//echo $final;
return $final;

	
}
?>