<?php
include('dc.php');
extract($_POST);
echo $subcateg;
$q=mysqli_query($con,"insert into tb_subcat(cat_id,sub_cat_name)values('$cat_id','$subcateg')")or die(mysqli_error($con));

?>