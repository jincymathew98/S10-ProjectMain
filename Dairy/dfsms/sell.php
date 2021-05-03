<?php

	session_start();
	
	
	require 'includes/config.php';
	
	
	if(isset($_POST["submit"]))
	{
		
		$email=$_POST['emailid'];
		$name=$_POST['productname'];

		$Quantity = $_POST["quantity"];
        $price=$_POST['productprice'];
		
		$dateofselling = $_POST["date"];
		


		
		$sql = "INSERT INTO tblsell(userid,productname,quantity, productprice, dateofselling) VALUES ('$email','$name','$Quantity','$price','$dateofselling')";
		$res = mysqli_query($con,$sql);
		if($res)
		{
           
			echo '<script>window.alert("Product has been successfully saled!"); window.open("add-product.php","_self",null,true)</script>';
		}
		else
		{
			echo '<script>alert("Already inserted this product!")</script>';
		}
	}

?>