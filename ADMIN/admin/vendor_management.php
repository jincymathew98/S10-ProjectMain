
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<script>
function toggleuser(element){
    var row = element.parentElement.parentElement;
    var id = row.id.split('_')[1];

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.response);
            if (this.response == "SUCCESSFULL"){
                // console.log(row)
                var button = row.children[row.children.length - 1].children[0];
                button.classList.toggle("btn-success");
                button.classList.toggle("btn-danger");
                if (button.innerHTML == "Click to DeActive")
                    button.innerHTML = "Click to Activate";
                else 
                    button.innerHTML = "Click to DeActive";
            } else {
                alert("something went wrong");
            }
        }
    };
    xhttp.open("GET", "toggleuserstatus.php?id="+id, true);
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
                    <a class="navbar-brand" href="index.html">
                        
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
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

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
                                    aria-hidden="true"></i><span class="hide-menu">View products</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="vendor_management.php" aria-expanded="false"><i class="me-3 fa fa-columns"
                                    aria-hidden="true"></i><span class="hide-menu">View user</span></a></li>
                       
                        
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
                        <h3 class="page-title mb-0 p-0">Blank Page</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
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
                require('dbconnection.php');
                
                if(isset($_GET['type']) && $_GET['type']!=''){
                    $type=get_safe_value($con,$_GET['type']);
                    die($type);
                    if($type=='status'){
                        $operation=get_safe_value($con,$_GET['operation']);
                        $id=get_safe_value($con,$_GET['lid']);
                        if($operation=='active'){
                            $status='1';
                        }else{
                            $status='0';
                        }
                        $update_status_sql="update tbl_reg set status='$status' where lid='$id'";
                        $updateresult = mysqli_query($con,$update_status_sql);
                        if ($updateresult){
                            die("succes ya mone");
                        } else {
                            die("moonchi mone");
                        }
                    } elseif ($type=='delete'){
                        $id=get_safe_value($con,$_GET['lid']);
                        $delete_sql="delete from tbl_reg where lid='$id'";
                        $deleteresult = mysqli_query($con,$delete_sql);
                        if ($deleteresult){
                            die("delete succes ya mone");
                        } else {
                            die("delete moonchi mone");
                        }
                    }
                }
                
                $sql="select * from  tbl_reg order by lid desc";
                $res=mysqli_query($con,$sql);
                ?>
                <div class="content pb-0">
                    <div class="orders">
                       <div class="row">
                          <div class="col-xl-12">
                             <div class="card">
                                <div class="card-body">
                                   <h4 class="box-title">USER MANAGEMENT </h4>
                                  
                                </div>
                                <div class="card-body--">
                                   <div class="table-stats order-table ov-h">
                                      <table class="table" > 
                                         <thead>
                                            <tr>
                                               
                                               <th width="2%">#</th>
                                               <th width="20%">Name</th>
                                               <th width="20%">Email</th>
                                               <th width="20%">Phone</th>
                                               <th width="26%"> Action</th>
                                              

                                            </tr>
                                         </thead>
                                         <tbody>
                                            <?php 
                                            $cnt=1;
                                            while($row=mysqli_fetch_assoc($res)){?>
                                            <tr id="row_<?php echo $row['reg_id']; ?>">
                                               
                                            <td><?php echo $cnt;?></td>
                                               <td><?php echo $row['name']?></td>
                                               <td><?php echo $row['email']?></td>
                                               <td><?php echo $row['phno']?></td>
                                               
                                              
                                               <td>
                                                <?php
                                                if($row['status']==1){ ?>
                                                    <button class='btn btn-danger' onclick="toggleuser(this)">Click to DeActive</button>
                                                <?php }
                                                else
                                                { ?>
                                                    <button class='btn btn-success' onclick="toggleuser(this)">Click to Activate</button>
                                                <?php }
                                               
                                                
                                                ?>
                                               </td>
                                              
                                               
                                            </tr>
                                            <?php 
$cnt++;
} ?>
                                            
                                         </tbody>
                                      </table>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                </div>
                
                
                


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