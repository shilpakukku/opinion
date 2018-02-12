<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="post_subcatagories.php">
		<table border="1">
			<tr><td>Sub categories </td><td><input type="text" name="subcateg" required</td></tr>
			Category<select name="cat_id">
				<option value="">select</option>
				<?php
				include('dc.php');
				$q=mysqli_query($con,"select * from tb_catagories");
				while($arr=mysqli_fetch_array($q))
				{
					$catid=$arr['id'];
					$catname=$arr['cat_name'];
					?>
				<option value="<?php echo $catid; ?>">
					<?php echo $catname; ?>
				</option>
				<?php
				}
				?>
			</select>
			
						
					
			
			<tr><td> <input type="submit" value="submit"</td></tr>
			


		</table>
	</form>

</body>
</html>