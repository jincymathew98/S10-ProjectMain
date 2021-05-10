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

  <title>Cart</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
  
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
	<div style="display:<?php if(isset($_SESSION["showAlert"])){echo $_SESSION["showAlert"];} 
	else { echo "none"; } unset($_SESSION["showAlert"])?>" class="alert alert-success alert-dismissible mt-2">
	
	<button type="button" class="close" data-dismiss="alert">&times;</button>
		
	<strong><?php if(isset($_SESSION["message"])){echo $_SESSION["message"];} unset($_SESSION["showAlert"]);?></strong> 
		
	</div>
	
  <div class="container">
	<div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Total Price</th>
                            <th scope="col" class="text-right">
							<a href="action.php?clear=all" onClick="return confirm('Are you sure to clear you cart?');" class="btn btn-sm btn-danger">Empty Cart</a>
							</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
						require_once "includes/dbconfig.php";
						$select_stmt=$db->prepare("SELECT * FROM cart");
						$select_stmt->execute();
						$grand_total = 0;
						while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
						{
						?>
                        <tr>
                            <td><img src="images<?php echo $row["product_image"]; ?>" width="50" height="50"/> </td>
							
                            <td><?php echo $row["product_name"]; ?></td>
							
                            <td><?php echo $row["product_price"]; ?></td>
							
                            <td><input type="number" class="form-control itemQty" value="<?php echo $row['quantity']; ?>" style="width:75px;" min="1"></td>
							
                            <td class="text-right"><?php echo $row["total_price"]; ?></td>
							
                            <td class="text-right">
							<a href="action.php?remove=<?php echo $row["cart_id"];?>" onClick="return confirm('Are you sure want to remove this item?');"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> 
							</td>
							
							<input type="hidden" class="pid" value="<?php echo $row["cart_id"]; ?>"> 
							<input type="hidden" class="pprice" value="<?php echo $row["product_price"]; ?>">
							
							<?php 
               $grand_total+=$row["total_price"];
              ?>
                    </tr>
						<?php
						}
						?> 
                        
                        
						
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong><?php echo $grand_total; ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="dashboard.php" class="btn btn-block btn-light"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
					<a href="checkout.php" class="btn btn-md btn-block btn-success text-uppercase <?=($grand_total > 1)?"":"disabled"; ?>"> Checkout </a>
                </div>
            </div>
        </div>
    </div>

  </div>
  <!-- /.container -->
  
  <!-- Footer -->
  <br /><br />
  


  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
	$(document).ready(function(){ 
	
		$(".itemQty").on("change", function(){
			
			var hide = $(this).closest("tr");
			
			var id = hide.find(".pid").val();
			var price = hide.find(".pprice").val();
			var qty = hide.find(".itemQty").val();
			location.reload(true);
			$.ajax({
				url: "action.php",
				method: "post",
				cache: false,
				data: {pqty:qty, pid:id, pprice:price},
				success:function(response){ 
					console.log(response);		
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
