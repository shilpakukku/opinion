<?php
include('dc.php');
extract($_POST);

$q=mysqli_query($con,"insert into tb_catagories(cat_name)values('$categname')")or die(mysqli_error($con));

?>