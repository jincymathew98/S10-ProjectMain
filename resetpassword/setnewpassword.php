<?php

require_once "mailFunctions.php";
require_once "../essentials.php";


if(!isset($_GET['key']) || !isset($_GET['email']))
{
   die("Invalid");
}
else
{
   $key=$_GET['key'];
   $email=$_GET['email'];
   $time=current_time();
   $con=connect();

   $query="select * from password_reset_temp where email='$email' and  keykey='$key' and expDate >= '$time'";
   $result=mysqli_query($con,$query);

   if($result)
   {
    ?><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
        h2{
            margin-top:3em;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Set Your Password</h2>
            <hr>
            <div class="resetpasswordbox">
                <form action="newpassword.php" method="post">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="New password" required >
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Confirm New password" required>
                    </div>
                    <input type="hidden" name="email" value="<?php echo $email; ?>" required>
                    <div class="form-group">
                        <input type="submit" value="Reset Password now" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html><?php

    
   }
   else
   {
       die($query);
   }

}


?>
