
	<?php
	session_start();
include('header2.php');
	include('dc.php');
	extract($_POST);
 if (file_exists("uploads/" . $_FILES["file"]["name"]))
          {
             ?>
<script>

alert("File Already Exist");
	//window.location="editprofile.php";
</script>

<?php
	 
	         // echo $_FILES["doc1"]["name"][$j] . " already exists. ";
	 
	 $query3=mysqli_query($con,"update tb_product set p_name='$name',p_description='$desc',p_price='$price' where p_id='$id'");

           }
else if(!empty($_FILES["file"]["name"])){
	
	
	   move_uploaded_file($_FILES["file"]["tmp_name"],
                 "uploads/" . $_FILES["file"]["name"]);
	              $fname="uploads/" . $_FILES["file"]["name"];
	$query1=mysqli_query($con,"update tb_product set p_name='$name',p_description='$desc',p_price='$price',image_status=1 where p_id='$id'");
	$query5=mysqli_query($con,"insert into tb_productimage(p_id,image_path) values('$id','$fname')");
	$query6=mysqli_query($con,"update tb_productimage set image_path='$fname' where p_id='$id'");
	
	
	if($query1){
	
	}
}



        else
		 {
			
	
$query2=mysqli_query($con,"update tb_product set p_name='$name',p_description='$desc',p_price='$price' where p_id='$id'");


                //I think loop goes here 

              
				  
				   
	
	      }

	
	
	?>
