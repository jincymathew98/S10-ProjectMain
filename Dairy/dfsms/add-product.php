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
       


        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->



        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sell</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>Add Product</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">

<section class="hk-sec-wrapper">

<div class="row">
<div class="col-sm">
<form class="needs-validation" method="post" action="sell.php">
                                       
<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Email</label>
<input type="email" class="form-control" name="emailid" value="<?php echo $_SESSION['email'];?>"  >
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Product Name</label>
<?php
  require_once "includes/config.php";
  $query="select productname,productprice from local ";
  $result=mysqli_query($con,$query);
  if(!$result)
  {
      die("error");
  }
  elseif(!mysqli_num_rows($result))  
  {
      die("DB Error");
  }

  $row=mysqli_fetch_array($result);
?>

<script>

    function calculateprice()
     {
         rate=<?php echo $row['productprice']; ?>;
         litres=parseInt(document.getElementById('litres_cal').value);
         price=rate*litres;
         console.log(typeof(rate))
         console.log(typeof(litres))
         console.log(typeof(price))
         document.getElementById('milk_price').value=price;
         
     }
     </script>
<input type="text" class="form-control" name="productname"  value="<?php echo $row['productname']; ?>" > 
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Quantity(in litres)</label>
<input type="number" class="form-control" name="quantity" min="1" onInput="calculateprice()" id="litres_cal">
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03"  >Product Price( <?php echo $row['productprice']; ?> Rs. per litre)</label>
<input type="number" class="form-control" name="productprice"  id="milk_price"  >
</div>
</div>

<div class="form-row">
<div class="col-md-6 mb-10">
<label for="validationCustom03">Date of selling</label>
<input type="text" class="form-control" name="date" value="<?php echo current_time(); ?>" >
</div>
</div>


<button class="btn btn-primary" type="submit" name="submit">Sell Now</button>
</form>
</div>
</div>
</section>
                     
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


    
</body>
</html>
