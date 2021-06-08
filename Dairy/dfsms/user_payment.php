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