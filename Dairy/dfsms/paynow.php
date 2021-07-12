<?php
session_start();
//error_reporting(0);
include('includes/config.php');

// if (strlen($_SESSION['aid']==0)) {
//   header('location:logout.php');
//   } else{ ?>
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
<style>
h6
{
  font-family: Bradley Hand, cursive;
  font-style : Italic;
}
</style>
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




                        <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <!-- Template Custom CSS -->
  <style type="text/css">
  
	body 
	{
		padding-top: 56px;
	}

  </style>

</head>

<body>

  <!-- Navigation -->
  
  <!-- Page Content -->
  <div class="container-fluid">
                    <div class="row g-0">
                            <div class="col-md-4">
                            <img
                                src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGF5bWVudHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="..."
                                class="img-fluid"
                            />
                            </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="card">
                            <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Payment</h6>
                                 </div>
                            <div class="card-body">
                            
                            <?php
                                    $sql = "SELECT * FROM tble_payment";
                                    $res = mysqli_query($con, $sql);

                                    while ($row = mysqli_fetch_array($res))
                                    {
                                    ?>
                                        <form name = "signup" method = "POST" action="payment.php">
                                        <div class ="form-group">
                                            <label>Name On Card</label>
                                            <input type ="text" class = "form-control" name="cardname" autocomplete="off" required value = <?php echo " ".$row['name']; ?>>
                                        </div> 
                                        <div class ="form-group">
                                            <label>Card Number</label>
                                            <input type ="text" class = "form-control" name="cardno" autocomplete="off" value = <?php echo " ".$row['card_number']; ?> required>
                                        </div> 
                                        <div class ="form-group">
                                            <label>Exp Month</label>
                                            <input type ="text" class = "form-control" name="expmonth" autocomplete="off" value = <?php echo " ".$row['exp_month']; ?> required>
                                        </div> 
                                        <div class ="form-group">
                                            <label>EXP Year</label>
                                            <input type ="text" class = "form-control" name="year" autocomplete="off" value = <?php echo " ".$row['exp_year']; ?> required>
                                        </div> 
                                        <div class ="form-group">
                                            <label>CVV</label>
                                            <input type ="password" class = "form-control" name="cvv" autocomplete="off" placeholder = "Enter CVV" required>
                                        </div> 
                                        <div class ="form-group">
                                            <label>Amount</label>
                                            <input type = "text" class ="form-control" name = "amount" autocomplete = "off" placeholder = "Enter amount">
                                        </div>
                                    <input type = "Submit" class="btn btn-primary btn-sm" name = "create" value = "Pay">
                                    
                                </form>
                               
                               
                                <?php
                                    }
                            ?>


                            
                            </div>
                            </div>
                        </div>
    </div>
                        <!---<div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                            </div>
                        </div>
                        </div>--->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
	
</body>

</html>
