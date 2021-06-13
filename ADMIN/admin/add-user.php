<?php
include("include/dbconnection.php");


$Name =  $_POST['name'];
$Email =$_POST['email'];
$PhnNo = $_POST['phone'];
$CPword = md5(mysqli_real_escape_string($con, $_POST['psw-repeat']));
//$usertype = mysqli_real_escape_string($con, $_POST['exist']);
$submit = mysqli_real_escape_string($con, $_POST['btn']);
$usertype="user";



$li = "select * from tbl_login where email='$Email'";
$result=mysqli_query($con,$li);
if(mysqli_num_rows($result)<1)
{






$sql="insert into tbl_login (email,p_swrd,usertype,status) values('$Email','$CPword','$usertype',1)";
if(mysqli_query($con,$sql))
{
	$n = mysqli_insert_id($con);
	
//echo("sucess in logintable");
}


$sql="insert into tbl_reg (lid,name,email,phno,status) values ($n,'$Name','$Email','$PhnNo',1 )";

if(mysqli_query($con,$sql))
{
	   mysqli_error($con); 
     
     ?>
     <script>alert("User added successfully by the admin");  
     location.href="admin.php";</script>
     <?php
        
}

}

else
{
           
          ?>
     <script>alert("Already registered user");  
     location.href="register.html";</script>
     <?php
           
           
           
      
}

mysqli_close($con);
?>

