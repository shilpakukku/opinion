<?php
include('dc.php');
$pid=$_GET['id'];
$query=mysqli_query($con,"select * from tb_product where p_id='$pid'") or die(mysqli_error($con));
$array=mysqli_fetch_array($query);
$im=$array[6];
if($im==1)
{
	$pid=$array[0];
	$array1=mysqli_query($con,"select * from tb_productimage where p_id='$pid'");
		$array1=mysqli_fetch_array($array1);
		$impath=$array1[2];
	}
 else
 {
	 $impath="uploads/default.png";
	 
 }
	?>
<img src="<?php echo $impath; ?>"
	 width="150" height="150">

<br>
<?php echo $array[3];?>
<br>
<?php echo $array[5];?>
<br>
<?php echo $array[4];?>


