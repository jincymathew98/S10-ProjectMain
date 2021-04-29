<?php
require_once "mailFunctions.php";
require_once "../essentials.php";


if (!isset($_POST['email']))
    die("error");

$email = $_POST['email'];
$con = connect();
$expiry = current_new_time(); 
$key = md5($email);
$query = "insert into password_reset_temp values ('$email', '$key', '$expiry')";
$result = mysqli_query($con, $query);

if (!$result){
    die("Error");
} 
$url="http://localhost/PROJECT/resetpassword/setnewpassword.php?key=$key&email=$email";
$mailresult=sendmail($email,'Reset Your Password',$url);

if($mailresult)
{
    ?>
    <script>alert("Check mail");  
    </script>
    <?php
}
else
{
    die("Fatal system error");
}
?>