<?php
session_start();
//error_reporting(0);
include('includes/config.php');
include('../../resetpassword/mailFunctions.php');
if (!isset($_SESSION['email'])) 

  header('location:logout.php');
 
// Add product Code


    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Add Product</title>
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

<!-- Top Navbar -->
<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
       


       
        <!-- /Vertical Nav -->



        <!-- Main Content -->
       

 
        <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<div align ="right">
                <a class="btn btn-primary" href="sellerdata.php" role="button">Generate</a>
                </div><br>

<table class="table">
    <thead >
      <tr  class="table-primary">
      <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Quantity</th>
        <th scope="col">Amount</th>
        <th scope="col">Date of selling</th>
        <th scope="col">Action</th>


      </tr>
    </thead>
   
    <?php 
								
									$sql = "select * from tblsell";
									$Resulta = mysqli_query($con,$sql);
                                    $cnt=1;
									while($Rows = mysqli_fetch_array($Resulta)):; 
								?>
								<tr style="color: black">
	
                                <td><?php echo $cnt;?></td>
									<td><?php echo $Rows["userid"]; ?></td>
									<td><?php echo $Rows["quantity"]; ?></td>
									<td><?php echo $Rows["productprice"]; ?></td>
									<td><?php echo $Rows["dateofselling"]; ?></td>
                                  
									<td>
                                    <!-- <a href="pdf_report.php?ProductID=<?php echo $Rows[0]; ?> "  onclick="ProductOnlick('Edit',<?php echo $Rows[0]; ?>)">Download</a>| -->
									<!-- <a href="delete.php?ProductID=<?php echo $Rows[0]; ?> "   onclick="ProductOnlick('Delete',<?php echo $Rows[0]; ?>)">Delete</a>   -->
									
									</td>
									<?php 
                                  
                                 $cnt++;
                                
                                endwhile; ?>
  </table>
        <!-- /Main Content -->

    </div>



    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
    <script src="dist/js/init.js"></script>
    <script src="dist/js/validation-data.js"></script>


    
</body>
</html>
