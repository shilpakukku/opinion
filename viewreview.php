<?php
session_start();
include('header2.php');
?>
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
						  <style>
.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #c850c0;
  background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
  background: -o-linear-gradient(45deg, #4158d0, #c850c0);
  background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
  background: linear-gradient(45deg, #4158d0, #c850c0);

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1170px;
}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width:70%;
  position: relative;
}
table * {
  position:relative;
}
table td, table th {
  padding-left: 8px;

}
table thead tr {
  height: 60px;
  background:#107C30;
	text-align:center;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align:center;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
	text-align:center;
	outline-width: thick;

  font-weight: unset;
}

tbody tr:nth-child(even) {
 
}

tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

.column1 {
  width: 260px;
  padding-left: 40px;
}

.column2 {
  width: 160px;
}

.column3 {
  width: 245px;
}

.column4 {
  width: 110px;
  text-align: right;
}

.column5 {
  width: 170px;
  text-align: right;
}

.column6 {
  width: 222px;
  text-align: right;
  padding-right: 62px;
}


@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 24px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: OpenSans-Regular;
    font-size: 14px;
    
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Date";
  }
  table tbody tr td:nth-child(2):before {
    content: "Order ID";
  }
  table tbody tr td:nth-child(3):before {
    content: "Name";
  }
  table tbody tr td:nth-child(4):before {
    content: "Price";
  }
  table tbody tr td:nth-child(5):before {
    content: "Quantity";
  }
  table tbody tr td:nth-child(6):before {
    content: "Total";
  }

  .column4,
  .column5,
  .column6 {
    text-align: left;
  }

  .column4,
  .column5,
  .column6,
  .column1,
  .column2,
  .column3 {
    width: 100%;
  }

  tbody tr {
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .container-table100 {
    padding-left: 15px;
    padding-right: 15px;
  }
						  
						  
						  
						  </style>
				
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Name</th>
								<th class="column2">Product</th>
								<th class="column2">Review</th>
								<th class="column1">Delete</th>
							
							</tr>
						</thead>
						<tbody>
								<tr>
	
						  
						  
						  
						  
					</tr>
						 <?php
					include('dc.php');
							if(isset($_GET['del'])){
								$delid=$_GET['del'];
								$a=mysqli_query($con,"delete from tb_review where id='$delid'");
								
							}
					$q=mysqli_query($con,"select * from tb_review");
					while($row=mysqli_fetch_array($q)){
						
						$id=$row[0];
						$p_id=$row[1];
						$email=$row[2];
						$review=$row[3];
						$z=mysqli_query($con,"select * from tb_regist where email='$email'") or die(mysqli_error($con));
						$rs=mysqli_fetch_array($z);
						$name=$rs[1];
						$w=mysqli_query($con,"select * from tb_product where p_id='$p_id'");
						$ds=mysqli_fetch_array($w);
						$product=$ds[3];
						
						
						echo"<tr><td>$name</td>";
						echo"<td>$product</td>";
						echo"<td>$review</td>";
					
						echo"<td><a href=viewreview.php?del=$id>Delete</a></td>";
						
					}
					
					?>
							</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
						  </table>
				</div>
				</div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       
	