<?php
include('dc.php');
$query=mysqli_query($con,"select * from tb_product");
while($array=mysqli_fetch_array($query))
{
	$pid=$array[0];
	$im=$array[6];
	if($im==1)
	{
		
		$array1=mysqli_query($con,"select * from tb_productimage where p_id='$pid'");
		$array1=mysqli_fetch_array($array1);
		$impath=$array1[2];
	}
 else
 {
	 $impath="uploads/default.png";
	 
 }
	?>
<a href="viewproduct1.php ? id=<?php echo $pid;?>">
<img src="<?php echo $impath; ?>"
	 width="150" height="150">
</a>
<br>
<?php echo $array[3];?>
<br>
<?php echo $array[5];?>

<?php	
	}
?>