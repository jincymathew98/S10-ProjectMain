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




                        <head>
   

  
   <link rel="stylesheet" href="css/style.css">
   <!--Only for demo purpose - no need to add.-->
   <link rel="stylesheet" href="css/demo.css" />
   
</head>
<body>
       
<div class="ScriptTop">
   <div class="rt-container">
       <div class="col-rt-4" id="float-right">

           <!-- Ad Here -->
           
       </div>
       <div class="col-rt-2">
           
       </div>
   </div>
</div>

<header class="ScriptHeader">
   <div class="rt-container">
       <div class="col-rt-12">
           <div class="rt-heading">
               <h1>Feedback Form  </h1>
              
           </div>
       </div>
   </div>
</header>

<section>
   <div class="rt-container">
         <div class="col-rt-12">
             <div class="Scriptcontent">
             
      
<div class="feedback">
<p>Dear Customer,<br>
Thank you for getting your  services at our website. We would like to know how we performed. Please spare some moments to give us your valuable feedback as it will help us in improving our service.</p>

<h4>Please rate your service experience for the following parameters</h4>

<form method="post" action="feedback.php">
<label>1. Your overall product experience with us ?</label><br>
 
<span class="star-rating">
 <input type="radio" name="rating1" value="1"><i></i>
 <input type="radio" name="rating1" value="2"><i></i>
 <input type="radio" name="rating1" value="3"><i></i>
 <input type="radio" name="rating1" value="4"><i></i>
 <input type="radio" name="rating1" value="5"><i></i>
</span>

 <div class="clear"></div> 
 <hr class="survey-hr">
<label>2. Friendliness and courtesy shown to you while recieving your products</label><br>
<span class="star-rating">
 <input type="radio" name="rating2" value="1"><i></i>
 <input type="radio" name="rating2" value="2"><i></i>
 <input type="radio" name="rating2" value="3"><i></i>
 <input type="radio" name="rating2" value="4"><i></i>
 <input type="radio" name="rating2" value="5"><i></i>
</span>


 <div class="clear"></div> 
 <hr class="survey-hr">
<label>3. Rate the quality of our products</label><br><br/>
 <div style="color:grey">
   <span style="float:left">
    POOR
   </span>
   <span style="float:right">
     BEST
   </span>
   
 </div>
<span class="scale-rating">
 <label value="1">
 <input type="radio" name="rating" >
 <label style="width:100%;"></label>
 </label>
 <label value="2">
 <input type="radio" name="rating" >
 <label style="width:100%;"></label>
 </label>
 <label value="3">
 <input type="radio" name="rating">
 <label style="width:100%;"></label>
 </label>
 <label value="4">
 <input type="radio" name="rating">
 <label style="width:100%;"></label>
 </label>
 <label value="5">
 <input type="radio" name="rating">
 <label style="width:100%;"></label>
 </label>
 <label value="6">
 <input type="radio" name="rating">
 <label style="width:100%;"></label>
 </label>
 <label value="7">
 <input type="radio" name="rating">
 <label style="width:100%;"></label>
 </label>
 <label value="8">
 <input type="radio" name="rating">
 <label style="width:100%;"></label>
 </label>
 <label value="9">
 <input type="radio" name="rating">
 <label style="width:100%;"></label>
 </label>
 <label value="10">
 <input type="radio" name="rating" value="10">
 <label style="width:100%;"></label>
 </label>
</span>

<div class="container">
<hr class="survey-hr"> 
<label for="m_3189847521540640526commentText">4. Name & Email:</label><br/><br/>
<input type="text" class="form-control" placeholder="Name" name="name">&nbsp;

<input type="email" class="form-control" placeholder="Email" name="email">


</div>


 <div class="clear"></div> 
 <hr class="survey-hr"> 
<label for="m_3189847521540640526commentText">6. Any Other suggestions:</label><br/><br/>
<textarea cols="75" name="commentText" rows="5" style="100%"></textarea><br>
<br>
 <div class="clear"></div> 
<input style="background:#43a7d5;color:#fff;padding:12px;border:0" type="submit" value="Submit your review" name="submit">&nbsp;
</form>
                 </div>
          
           </div>
       </div>
   </div>
</section>
    


  
                    
              
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
