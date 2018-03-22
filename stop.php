<?php
include('dc.php');
foreach(file('positive.txt') as $line) {
   $q=mysqli_query($con,"insert into tb_keyword(kcat_id,keyword) values (2,'$line')");
}

?>