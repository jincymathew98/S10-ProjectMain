<?php
session_start();
//error_reporting(0);
include('includes/config.php');
// if (!isset($_SESSION['email'])) 

//   header('location:logout.php');
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Search Product</title>
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
       


        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->



        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
<li class="breadcrumb-item"><a href="#">Search</a></li>
<li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Search Product</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">


<!--code for search result -->
<?php if(isset($_POST['search'])){?>
 <section class="hk-sec-wrapper">
     
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Company</th>
                                                    <th>Pricing</th>
                                                    <th>Action</th>
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
$pname=$_POST['product'];
$query=mysqli_query($con,"select * from tbl_products where product_name like '%$pname%'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<form method="post" action="cart.php">                                                  
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['ProductBrand'];?></td>
<td><?php echo $row['product_price'];?></td>


<td>
<!-- <button id="addItem" class="btn btn-success btn-md">Available</button> -->
<a href="dashboard.php">Would you like to buy??</a>
</td>
</tr>
</form>
<?php 
$cnt++;
} ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
</section>
<?php } ?>                        









    




</div>
</div>
</div>


          

        </div>
        <!-- /Main Content -->

    </div>
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
    <style type="text/css">
        #btnEmpty {
    background-color: #ffffff;
    border: #d00000 1px solid;
    padding: 5px 10px;
    color: #d00000;
    float: right;
    text-decoration: none;
    border-radius: 3px;
    margin: 10px 0px;
}

    </style>

</body>
</html>
