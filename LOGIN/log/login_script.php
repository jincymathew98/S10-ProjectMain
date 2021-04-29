<?php



$con=mysqli_connect("localhost","root","","test");

	$uname = $_POST["email"];
	$pwrd = $_POST["password"];
	$password = MD5($pwrd);

	
	$sql="select * from tbl_login where email='$uname' and p_swrd ='$password'";
	// die($sql);	
	$mysqli_result =mysqli_query($con,$sql);
	/*die ("Helll");*/
	if(mysqli_num_rows($mysqli_result)>0)
	{
		
		session_start();
				
		    $result = mysqli_fetch_array($mysqli_result);
		        $_SESSION['email'] = $uname;
				$usertype=$result['usertype'];
				$_SESSION["usertype"] = $result["usertype"];

				
				if($usertype == "admin")
				{
					
					header("location:../../ADMIN/admin/admin.php");
					
				}
				elseif($usertype == "buyer")
				{
					
					
					header("location:../../BUYER/addtocart/index.php");

				}
				elseif($usertype == "seller")
				{
					header("location:../../SELLER/seller/seller.php");
				}
				else
				{
					header('location: login.html');
				}
	} 
		else 
        {
			    //die("$sql");
				header('location: login.html');
		}

?>