    <?php
    session_start();
    //error_reporting(0);
    include('includes/config.php');
    // if (strlen($_SESSION['aid']==0)) {
    //   header('location:logout.php');
    //   } else{
    // Change password code
    

        ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Change Password</title>
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
    <li class="breadcrumb-item"><a href="#">Change Password</a></li>
    <li class="breadcrumb-item active" aria-current="page">User</li>
                    </ol>
                </nav>
                <!-- /Breadcrumb -->

                <!-- Container -->
                <div class="container">
                    <!-- Title -->
                    <div class="hk-pg-header">
                        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="external-link"></i></span></span>User Change Password</h4>
                    </div>
                    <!-- /Title -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-12">
    <section class="hk-sec-wrapper">

    <div class="row">
    <div class="col-sm">
    <form class="needs-validation" action="changepassword.php" method="post" name="chngpwd"  onsubmit="return valid();">
                                        
    <div class="form-row">
    <div class="col-md-6 mb-10">
    <label for="validationCustom03">Current Password</label>
    <input type="password" class="form-control" id="password" placeholder="Current Passsword" name="password" >
    <div class="invalid-feedback">Please provide  current password.</div>
    </div>
    </div>

    <div class="form-row">
    <div class="col-md-6 mb-10">
    <label for="validationCustom03">New Password</label>
    <input type="password" class="form-control" id="npwd" placeholder="New Passsword" name="npwd" >
    <div class="invalid-feedback">Please provide  new password.</div>
    </div>
    </div>

    <div class="form-row">
    <div class="col-md-6 mb-10">
    <label for="validationCustom03">Confirm Password</label>
    <input type="password" class="form-control" id="cpwd" placeholder="Confirm Passsword" name="cpwd" >
    <div class="invalid-feedback">Please provide  confirm password.</div>
    </div>
    </div>
                                    
    <button class="btn btn-primary" type="submit" name="Submit" value="Change Password">Change</button>
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


        <script >
                function valid()
                {
                if(document.chngpwd.password.value=="")
                {
                alert("Old Password Filed is Empty !!");
                document.chngpwd.password.focus();
                return false;
                }
                else if(document.chngpwd.npwd.value=="")
                {
                alert("New Password Filed is Empty !!");
                document.chngpwd.npwd.focus();
                return false;
                }
                else if(document.chngpwd.cpwd.value=="")
                {
                alert("Confirm Password Filed is Empty !!");
                document.chngpwd.cpwd.focus();
                return false;
                }
                else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
                {
                alert("Password and Confirm Password Field do not match  !!");
                document.chngpwd.cpwd.focus();
                return false;
                }
                return true;
                }
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

    </body>
    </html>
