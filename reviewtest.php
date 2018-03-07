<?php
function stopwords()
{
	include('dc.php');
	$query1=mysqli_query($con,"select * from tb_stopwords");
	while($array1=mysqli_fetch_array($query1))
		{
	
			$s[]=trim($array1[1]);
	
		}
	$query=mysqli_query($con,"select * from tb_review ");
	while($array=mysqli_fetch_array($query))
		{
			$review=$array[3];
			//echo $review ."<br>";
		
	$ab=explode(' ',$review);
	foreach($ab as $value)
		{
			$a[]=trim($value);
		}
	}
		$as=array_diff($a,$s);
	foreach($as as $value1)
		{
			//echo $value1."<br>";
			$res[]=$value1;
		}
	return $res;
}
?>