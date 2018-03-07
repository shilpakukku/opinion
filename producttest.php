<?php

include('dc.php');
	$query=mysqli_query($con,"select * from tb_product ");
	while($array=mysqli_fetch_array($query))
		{
			$product=$array[3];
			echo $product ."<br>";
		$pid=$array[0];
		
	
$query1=mysqli_query($con,"select distinct(u_email) from tb_review where p_id='$pid'");
while($array1=mysqli_fetch_array($query1))
{
	$a[]=$array1[0];
}
	}
		
	echo count($a);
?>