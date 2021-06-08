<?php
session_start();
//error_reporting(0);
include('includes/config.php');

if(!empty($_SESSION['email']))
 {
     $temp=$_SESSION['email'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Dashboard</title>
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">




</head>

<body>

	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

<?php include_once('includes/navbar.php');
include_once('includes/sidebar.php');
?>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">




                     

  
  <!-- Navigation -->
  
  <!-- Page Content -->
  
  <div align ="right">
    <a class="btn btn-primary" href="sellerdata.php" role="button">Generate</a>
 </div>
              
<br>
<table class="table">
    <thead >
      <tr  class="table-primary"><br>
      <th >#</th>
        <th >Email</th>
        <th>Quantity</th>
        <th >Amount</th>
        <th>Date of selling</th>
        <th >Action </th>
        </tr>
      </thead>
   
    <?php 
									//require 'Connection.php';
									$sql = "select userid,quantity,productprice,dateofselling,status from tblsell where userid='$temp'";
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
                                    <?php
                                    if ($Rows['status']== 0)
                        {  
                                  echo "<td> Waiting for action </td>";
                            
                        }
                
                    
                    elseif($Rows['status'] == 1)
                        {
                            echo "<td>Selling confirmed</td>" ;
                        }
                    else {
                        echo "<td> Selling cancelled  </td>" ;
                    }
						?>	
			</td></tr> 
									<?php 
                                  
                                 $cnt++;
                                
                                endwhile; ?>
  </table>
  




</div>
					
            </div>
            <!-- /Container -->
			
           
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="dist/js/vectormap-data.js"></script>
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <script src="vendors/apexcharts/dist/apexcharts.min.js"></script>
	<script src="dist/js/irregular-data-series.js"></script>
    <script src="dist/js/init.js"></script>

    <?php
    }
    else
    {
        header("location:login.html");
    }
    ?>
	
</body>

</html>
