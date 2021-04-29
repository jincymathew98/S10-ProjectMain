<?php
session_start();
include("../../essentials.php");

$con=connect();

if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['password']);
 $uname=$_SESSION['email'];
 $newpassword=md5($_POST['npwd']);
$sql=mysqli_query($con,"SELECT p_swrd FROM tbl_login where p_swrd='$oldpass' && email='$uname'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update tbl_loginset p_swrd=' $newpassword' where email='$uname'");

 
 
 ?>
 <script>alert("Password changed successfully");  
 location.href="index.php";</script>
<?php

}
else
{
 
?>
    <script>alert("Failed to update");  
    location.href="index.php";</script>
    <?php
}
}
?>