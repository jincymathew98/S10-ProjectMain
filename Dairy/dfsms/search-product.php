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

<section class="hk-sec-wrapper">

<div class="row">
<div class="col-sm">
<form class="needs-validation" method="post" novalidate>
                                       
<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Product Name</label>
<input type="text" class="form-control" id="validationCustom03" placeholder="Product Name" name="productname" required>
<div class="invalid-feedback">Please provide a valid product name.</div>
</div>
</div>

                                 
<button class="btn btn-primary" type="submit" name="search">search</button>
</form>
</div>
</div>
</section>
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
                                                    <th>Category</th>
                                                    <th>Company</th>
                                                    <th>Product</th>
                                                    <th>Pricing</th>
                                                    <th>Quantity</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
$pname=$_POST['productname'];
$query=mysqli_query($con,"select * from tbl_products where Productname like '%$pname%'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{    
?>
<form method="post" action="cart.php">                                                  
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['Productname'];?></td>
<td><?php echo $row['ProductBrand'];?></td>
<td><?php echo $row['ProductPrice'];?></td>
<td><?php echo $row['ProductCategory'];?></td>
<td><input type="text" class="product-quantity" name="quantity" value="1" size="2" /></td>
<td>
<input type="submit" value="Add to Cart" class="btnAddAction" >
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
