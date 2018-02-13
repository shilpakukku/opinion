<?php
session_start();
include('dc.php');

$catid=$_GET['q'];

$q=mysqli_query($con,"select * from tb_subcat where cat_id='$catid'");
				while($arr=mysqli_fetch_array($q))
				{
					$catid=$arr['id'];
					$catname=$arr['sub_cat_name'];
					?>
				<option value="<?php echo $catid; ?>">
					<?php echo $catname; ?>
				</option>
<?php
				}
?>