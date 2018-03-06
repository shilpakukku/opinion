<?php
include('dc.php');
foreach(file('stopwords.txt') as $line) {
   $q=mysqli_query($con,"insert into tb_stopwords(s_word) values ('$line')");
}

?>