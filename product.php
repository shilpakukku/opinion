<!doctype html>
<html>
<head>
	<?php
	include('header2.php');

	
	
	
	
	
	
	?>
	
	

	
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<script type="text/javascript">
	function getXMLHttp()
	{
		var xmlHttp
		
		try
		{
			xmlHttp=new XMLHttpRequest();
		}
		catch(e)
		{
			try
			{
				xmlHttp=new ActiveXObject("Masxml2.XMLHTTP");
			}
			catch(e)
			{
				try
				{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e)
				{
					alert("your browser doesnot support AJAX!");
					return false;
				}
			}
		}
		return xmlHttp;
		
	}
function getSubcat(str) {
    if (str == "") {
        document.getElementById("result").innerHTML = "";
        return;
		// document.getElementById("subject").innerHTML = "";
        //return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
           var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
           var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("result").innerHTML = xmlhttp.responseText;
				
			}
        }
        xmlhttp.open("GET","getsubcat.php?q="+str,true);
        xmlhttp.send();
		
		     }
}

</script>


	
	
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
	
	<form method="post" action="post_product.php" enctype="multipart/form-data">
		<table border="1">
			<tr><td>product</td><td><input type="text" name="p_name" required</td></tr>
			<tr><td>Description</td><td><textarea name="p_description" required></textarea></td></tr>
			<tr><td>Price</td><td><input type="text" name="p_price" required</td></tr>
			<tr><td>Category</td><td>
			<select name="cat_id" onChange="getSubcat(this.value)">
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
				</select></td></tr>
			<tr><td> subcategory</td><td>			<select name="subcat_id" id="result">
				<option value="">select</option>
				
			</select>
				</td></tr>
				<tr><td>
			
					<input type="file" name="file"></td></tr>		
					
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