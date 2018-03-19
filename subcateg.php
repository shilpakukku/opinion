<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
	include('header2.php');
	
	
	
	
	
	
	
	?>
	
	
	
	
	
</head>

<body>
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
       
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="">
            <div class="info-box-content">
                      <div class="col-md-12 col-sm-12 col-xs-12">	
	
	
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
	</div>
				</div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.c


</body>
</html>