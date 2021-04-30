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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
     
	  
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
		
      </button>
		
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="btn btn-success btn-sm mt-1" href="cart.php">
                <i class="fa fa-shopping-cart"></i>
                <span class="badge badge-light" id="cart-item"></span>
            </a>
            <a class="btn btn-success btn-sm mt-1" href="wishlist.php">
                <i class="fa fa-heart"></i>
                <span class="badge badge-light" id="cart-item"></span>
            </a>
            <a class="btn btn-success btn-sm mt-1" href="myorders.php">
                <i class="">My orders</i>
                <span class="badge badge-light" id="cart-item"></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  
  <div class="alert-message"></div>
  
  <div class="container">

    <div class="row">
		
        <div class="row">
		
		<?php
		require_once "dbconfig.php";
		$select_stmt=$db->prepare("SELECT * FROM product");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/<?php echo $row['product_image']; ?>" width="400px" height="200px"></a>
			  
              <div class="card-body">
                <h4 class="card-title text-primary"><?php echo $row['product_name']; ?> </h4>
                <h5><?php echo number_format($row['product_price'],2); ?>/-</h5>
              </div>
			  
              <div class="card-footer">
				<form class="form-submit">
					<input type="hidden" class="pid" value="<?php echo $row['product_id']; ?>">
					<input type="hidden" class="pname" value="<?php echo $row['product_name']; ?>">
					<input type="hidden" class="pprice" value="<?php echo $row['product_price']; ?>">
					<input type="hidden" class="pimage" value="<?php echo $row['product_image']; ?>">
					<input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">
					<button id="addItem" class="btn btn-success btn-md">Add to Cart</button>
				</form>
              </div>
			  
            </div>
          </div>
		<?php
		}
		?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  
 

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
	$(document).ready(function(){ 
		$(document).on("click", "#addItem", function(e){	
			e.preventDefault();
			var form = $(this).closest(".form-submit");
			var id = form.find(".pid").val();
			var name = form.find(".pname").val();
			var price = form.find(".pprice").val();
			var image = form.find(".pimage").val();
			var code = form.find(".pcode").val();
			
			$.ajax({
				url: "action.php",
				method: "post",
				data: {pid:id, pname:name, pprice:price, pimage:image, pcode:code},
				success:function(response){
					$(".alert-message").html(response);
					window.scrollTo(0,0);
					load_cart_item_number();
				} 
			});
		});
		
		load_cart_item_number();
		
		function load_cart_item_number(){
			$.ajax({
				url: "action.php",
				method: "get",
				data: {cartItem:"cart_item"},
				success:function(response){
					$("#cart-item").html(response);
				}
				
			});
		}	
	});
  </script>

</body>

</html>



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
