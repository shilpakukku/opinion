<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="post_review.php">
		<table border="1">
			
			<tr><td>product</td><td>
			<select name="pid" >
				<option value="">select</option>
				
				<?php
				include('dc.php');
				$q=mysqli_query($con,"select * from tb_product order by p_name");
				while($arr=mysqli_fetch_array($q))
				{
					$pid=$arr['p_id'];
					$pname=$arr['p_name'];
					?>
				<option value="<?php echo $pid; ?>">
					<?php echo $pname; ?>
				</option>
				<?php
				}
				?>
				</select></td></tr>

				
			
			<tr><td>Review</td><td><textarea name="txt_review" ></textarea></td></tr>
			<tr><td> <input type="submit" value="post"</td></tr>
			</table>
	</form>

	
	
	
</body>
</html>