<!DOCTYPE html>
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
<body >
    <div class="container">
        <h2>Reset Your Password</h2>
        <hr>
        <div class="resetpasswordbox">
            <form action="resetpassword.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control">
                </div><br>
                <div class="form-group">
                    <input type="submit" value="Reset Password now" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
