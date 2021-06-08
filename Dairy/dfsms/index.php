<?php
session_start();
//error_reporting(0);
include('includes/config.php');
include('process.php');
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

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>

</head>
<body>
<div class="row container" >
<div class="col-md-4 ">
	<h3><b>Rating & Reviews</b></h3>
	<div class="row">
	
		<div class="col-md-6">
			<h3 align="center"><b><?php echo round($AVGRATE,1);?></b> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:#ff9f00;"></i></h3>
			<p><?=$Total;?> ratings and <?=$Total_review;?> reviews</p>
		</div>
		<div class="col-md-6">
			<?php
			while($db_rating= mysqli_fetch_array($rating)){
			?>
				<h4 align="center"><?=$db_rating['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> Total <?=$db_rating['Total'];?></h4>
				
				
			<?php	
			}
				
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">	
		<?php
			while($db_review= mysqli_fetch_array($review)){
		?>
				<h4><?=$db_review['rating'];?> <i class="fa fa-star" data-rating="2" style="font-size:20px;color:green;"></i> by <span style="font-size:14px;"><?=$db_review['email'];?></span></h4>
				<p><?=$db_review['remark'];?></p>
				<hr>
		<?php	
			}
				
		?>
		</div>
	</div>
		
	
	<div id="rating_div">
				<div class="star-rating">
					<span class="fa divya fa-star-o" data-rating="1" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="2" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="3" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="4" style="font-size:20px;"></span>
					<span class="fa fa-star-o" data-rating="5" style="font-size:20px;"></span>
					<input type="hidden" name="whatever3" class="rating-value" value="1">
				</div>
	</div>
</div>
</div><br>
<input type="hidden" name="demo_id" id="demo_id" value="1">
<div class="col-md-4">
<input type="text" class="form-control" name="email" id="email" placeholder="Email Id"><br>
<textarea class="form-control" rows="5" placeholder="Write your review here..." name="remark" id="remark" required></textarea><br>
<p><button  class="btn btn-default btn-sm btn-info" id="srr_rating">Submit</button></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/index.js"></script>

</body>





          
            
    <!-- /.row -->

  </div>
  <!-- /.container -->
  
  

  



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
	
</body>

</html>
