<?php

require_once "../essentials.php";

$con=connect();

$pass1=$_POST['password'];
$pass2=$_POST['password2'];
$email=$_POST['email'];


if ($pass1!=$pass2)
{
    $error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
}

    
    else
    {
    $pass1 = md5($pass1);
    mysqli_query($con,
    "UPDATE `tbl_login` SET `p_swrd`='".$pass1."'
    WHERE `email`='".$email."';"
    );
     
    
     
    echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
    <p><a href="http://localhost/PROJECT/LOGIN/log/login.html">
    Click here</a> to Login.</p></div><br />';
       } 
    
    ?>