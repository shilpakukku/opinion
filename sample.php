<?php
session_start();
include('dc.php');
include('reviewtest.php');
include('NB.php');

$username=$_SESSION['user'];

	
$res=stopwords();
//print_r($res);
$X=$res;
$n='kcat_id';
$table='tb_keyword';
$prob=classify($X,$n,$table);
echo $prob;
?>
