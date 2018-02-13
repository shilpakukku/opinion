<?php
include('dc.php');
extract($_POST);
if (file_exists("uploads/" . $_FILES["file"]["name"]))
          {
             echo $_FILES["file"]["name"] . " already exists. ";
	         // echo $_FILES["doc1"]["name"][$j] . " already exists. ";
           }
        else
		 {

                //I think loop goes here 

                 move_uploaded_file($_FILES["file"]["tmp_name"],
                 "uploads/" . $_FILES["file"]["name"]);
	              $fname="uploads/" . $_FILES["file"]["name"];
				  
		}
if($fname)
{
$q=mysqli_query($con,"insert into tb_product(cat_id,subcat_id,p_name,p_description,p_price,image_status)values('$cat_id','$subcat_id','$p_name','$p_description','$p_price',1)")or die(mysqli_error($con));
 $last_id = mysqli_insert_id($con);
	
       		   
                    $u=mysqli_query($con,"insert into tb_productimage(p_id,image_path) values('$last_id','$fname')");

}
else{
$q=mysqli_query($con,"insert into tb_product(cat_id,subcat_id,p_name,p_description,p_price,image_status)values('$cat_id','$subcat_id','$p_name','$p_description','$p_price',0)")or die(mysqli_error($con));
	
}
header('location:product.php');
?>