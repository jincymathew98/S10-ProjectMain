
    

                      
                     
           
                       
    
      <head>             
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
    <div class="container">
                <p style="color:red;"></p>
                <form name="chngpwd" action="changepassword.php" method="post" onSubmit="return valid();">
                <table align="center">
                <tr height="50">
                <td>Old Password :</td>
                <td><input type="password" name="password" id="password" class="form-control"></td>
                </tr>
                <tr height="50">
                <td>New Passowrd :</td>
                <td><input type="password" name="npwd" id="npwd" class="form-control"></td>
                </tr>
                <tr height="50">
                <td>Confirm Password :</td>
                <td><input type="password" name="cpwd" id="cpwd" class="form-control"></td>
                </tr>
                <tr>
                
                <td><input type="submit" name="Submit" value="Change Password" class="btn btn-danger"/></td>
                </tr>
                 </table>
                </form>
                </div>
                
                <script >
                function valid()
                {
                if(document.chngpwd.password.value=="")
                {
                alert("Old Password Filed is Empty !!");
                document.chngpwd.password.focus();
                return false;
                }
                else if(document.chngpwd.npwd.value=="")
                {
                alert("New Password Filed is Empty !!");
                document.chngpwd.npwd.focus();
                return false;
                }
                else if(document.chngpwd.cpwd.value=="")
                {
                alert("Confirm Password Filed is Empty !!");
                document.chngpwd.cpwd.focus();
                return false;
                }
                else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
                {
                alert("Password and Confirm Password Field do not match  !!");
                document.chngpwd.cpwd.focus();
                return false;
                }
                return true;
                }
                </script>

                                                
                                           



 

        
      



    






    
    



                    
                