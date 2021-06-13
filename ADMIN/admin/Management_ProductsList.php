<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    
<script>
function toggleuser(element){
    var row = element.parentElement.parentElement;
    var id = row.id.split('_')[1];

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
     {
        if (this.readyState == 4 && this.status == 200)
         {
            console.log(this.response);
            if (this.response == "SUCCESSFULL")
            {
                // console.log(row)
                var button = row.children[row.children.length - 1].children[0];
                button.classList.toggle("btn-success");
                button.classList.toggle("btn-danger");
                if (button.innerHTML == "Outstock")
                    button.innerHTML = "Instock";
                else 
                    button.innerHTML = "Outstock";
            } else {
                alert("something went wrong");
            }
        }
    };
    xhttp.open("GET", "userstatus.php?id="+product_id, true);
    xhttp.send();

}
</script>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords">
    <meta name="description">
    <meta name="robots" content="noindex,nofollow">
    <title>ADMIN PAGE</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="admin.php">
                        
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" width="100%" height="100%"/>

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                   

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                   
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="admin.php" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Management_Products.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Add Products</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="Management_ProductsList.php" aria-expanded="false"><i class="me-3 fa fa-table"
                                    aria-hidden="true"></i><span class="hide-menu">View Products</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="vendor_management.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu">View user</span></a></li>

                                    <li class="sidebar-item"> 
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="invoices.php" aria-expanded="false">
                                <i class="me-3 fa fa-columns" aria-hidden="true">
                                </i>
                                <span class="hide-menu"> Buyer Reports</span>
                                </a>
                                </li>
                                

                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="includes/bwdate.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu"> Seller Reports</span></a></li>



                                   
                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="feedback.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu"> View Feedbacks</span></a></li>

                                   


                                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="logout.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu"> Logout</span></a></li>

                       
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                      
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">View Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                 
                <?php
                require('include/dbconnection.php');

                if(isset($_GET['type']) && $_GET['type']!=''){
                    $type=get_safe_value($con,$_GET['type']);
                    die($type);
                    if($type=='action'){
                        $operation=get_safe_value($con,$_GET['operation']);
                        $id=get_safe_value($con,$_GET['product_id']);
                        if($operation=='active'){
                            $action='Instock';
                        }else{
                            $action='Outstock';
                        }
                        $update_status_sql="update tbl_products set action='$action' where product_id='$id'";
                        $updateresult = mysqli_query($con,$update_status_sql);
                        if ($updateresult){
                            die("succesful");
                        } else {
                            die("Failed");
                        }
                    } elseif ($type=='delete'){
                        $id=get_safe_value($con,$_GET['product_id']);
                        $delete_sql="delete from tbl_products where product_id='$id'";
                        $deleteresult = mysqli_query($con,$delete_sql);
                        if ($deleteresult){
                            die("deleted successfully");
                        } else {
                            die("failed to delete");
                        }
                    }
                }


?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">Product List</h2>
					<hr>
					<div class="col-lg-12">
						<div class="table-responsive">
							<table  class="table">
                            <thead>
								<tr class="table-primary">
									
									<th>#</th>
									<th>Product Name</th>
									<th>Product Brand</th>
									<th>Product Quantity</th>
									
									<th>Product Price</th>
						
                                    <th>Image</th>
									<th>Action</th>
								</tr>
								</thead>
                                <tbody>
								<?php 
									require 'include/Connection.php';
									$sql = "select * from tbl_products";
									$Resulta = mysqli_query($Conn,$sql);
                                    $cnt=1;
									while($Rows = mysqli_fetch_array($Resulta)):; 
								?>
								<tr style="color: black">
								
                                    <td><?php echo $cnt;?></td>
									<td><?php echo $Rows["product_name"]; ?></td>
									<td><?php echo $Rows["ProductBrand"]; ?></td>
									<td><?php echo $Rows["ProductSize"]; ?></td>
								
									<td><?php echo $Rows["product_price"]; ?></td>
									
                                    <td><img style="width: 50px; height: 50px;" src="data:image;base64,<?php echo $Rows["product_image"];?>"></td>
									<td>
                                                <?php
                                                if($Rows['action']=='Instock'){ ?>
                                                    <button class='btn btn-danger' onclick="toggleuser(this)">Instock</button>
                                                <?php }
                                                else
                                                { ?>
                                                    <button class='btn btn-success' onclick="toggleuser(this)">Outstock</button>
                                                <?php }
                                               
                                                
                                                ?>
                                               </td>
                                    </tbody>
									<?php 
                                
                                 $cnt++;
                                
                                endwhile; ?>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- /.container -->

   
	

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		function ProductOnlick(action,pid)
		{
			if(action == "Edit")
			{
				if(confirm("Are you sure you want to download ?")==true)
				{
					window.open("Management_Products.php?ProdID="+pid+"&ProductAction="+action,"_self",null,true);
				}
			}else if(action == "Delete")
			{
				if(confirm("Are you sure you want to Delete this product?")==true)
				{
					window.open("delete.php","_self",null,true);
				}
			}
		}
	</script>



    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>