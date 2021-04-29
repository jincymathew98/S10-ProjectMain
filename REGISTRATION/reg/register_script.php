<?php
include("dbconnection.php");


$Name = mysqli_real_escape_string($con, $_POST['Name']);
$Email = mysqli_real_escape_string($con, $_POST['Email']);
$PhnNo = mysqli_real_escape_string($con, $_POST['PhnNo']);
$CPword = md5(mysqli_real_escape_string($con, $_POST['CPword']));
$usertype = mysqli_real_escape_string($con, $_POST['exist']);
$submit = mysqli_real_escape_string($con, $_POST['register-btn']);




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
	    
     
     ?>
     <script>alert("Records inserted successfully");  
     location.href="../../LOGIN/log/login.html";</script>
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

