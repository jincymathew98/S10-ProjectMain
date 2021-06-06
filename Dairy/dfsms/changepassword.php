<?php
session_start();
include("includes/config.php");



if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['password']);
 $uname=$_SESSION['email'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT p_swrd FROM tbl_login where p_swrd='$oldpass' && email='$uname'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update tbl_login set p_swrd='$newpassword' where email='$uname'");

 
 
 ?>
 <script>alert("Password changed successfully");  
 location.href="dashboard.php";</script>
<?php

}
else
{
 
?>
    <script>alert("Failed to update");  
    location.href="dashboard.php";</script>
    <?php
}
}
?>