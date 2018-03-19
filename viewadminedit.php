<?php
session_start();
include('header2.php');
include('dc.php');
$id=$_GET['del'];
$q=mysqli_query($con,"select * from tb_product where p_id='$id'");
$c=mysqli_fetch_array($q);
$n=$c[3];
$d=$c[4];
$p=$c[5];
$i=$c[6];
if($i==1){
	
	$z=mysqli_query($con,"select * from tb_productimage where p_id='$id'");
	$w=mysqli_fetch_array($z);
	$im=$w[2];
	
}
else{
	$im="uploads/default.png";
	
}
?>
<form method="post" action="updateproduct.php" enctype="multipart/form-data">
Name<input type="text" name="name" value="<?php echo $n;?>">
<input type="hidden" name="id" value="<?php echo $id;?>">
Description<input type="text" name="desc" value="<?php echo $d;?>">
Price<input  type="text"  name="price"value="<?php echo $p;?>">
Photo<input id="image"   type="image" formaction="" name="photo" width="150" height="130"<img src="<?php echo $im; ?>" >
				<input  type="file" name="file">
<input type="submit" value="Submit">
</form>