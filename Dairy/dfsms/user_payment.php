<?php 
$con=mysqli_connect("localhost","root","","test")or die("Couldn't connect to server");
session_start();
if(!empty($_SESSION['email']))

    {
        $temp = $_SESSION['email'];
    


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Payment</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user.php">
                <div class="sidebar-brand-icon rotate-n-15">
                  
                </div>
                <div class="sidebar-brand-text mx-3">Library Management </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="user.php">
                    
                    <span>User Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                   <!--- <i class="fas fa-fw fa-cog"></i> --->
                    <span>LIBRARY</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">BOOKS</h6>
                        <a class="collapse-item" href="issued_book.php">Issued Books</a>
                        <a class="collapse-item" href="issued_book(Test).php">Issued Books(Test)</a>
                        <a class="collapse-item" href="reservation_details.php">Reservation Details</a>
                        <a class="collapse-item" href="user_searchbook.php">Search Books</a>
                        <a class="collapse-item" href="#">Dues Archives</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                   <!--- <i class="fas fa-fw fa-cog"></i> --->
                    <span>DIGITAL LIBRARY</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">E-BOOK</h6>
                        <a class="collapse-item" href="user_ebook_add.php">Contribute Your E-Book</a>
                        <a class="collapse-item" href="user_ebook_download.php">Download E-Book</a>


            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                   <!--- <i class="fas fa-fw fa-wrench"></i>--->
                    <span>PROFILE</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Profile</h6>
                        <a class="collapse-item" href="user_profile.php">My Profile</a>
                        <a class="collapse-item" href="user_report.php">Activities</a>
                        <a class="collapse-item" href="user_payment.php">Payment</a>
                        
                      <!---<a class="collapse-item" href="#">Other</a>--->
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            
            <!-- Divider -->
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                        <!-- Nav Item - Alerts -->
                       

                        <!-- Nav Item - Messages -->
                        

                        <!-- Nav Item - User Information -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
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
                                        <form name = "signup" method = "POST" action="php/payment.php">
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
                                            <input type ="text" class = "form-control" name="cvv" autocomplete="off" placeholder = "Enter CVV" required>
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

            <!-- Footer -->
           
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<?php 
    }
    else{
        header("location: login.php");
    }
?>