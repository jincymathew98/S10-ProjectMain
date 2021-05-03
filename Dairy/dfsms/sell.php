<?php

	session_start();
	
	
	require 'includes/config.php';
	
	
	if(isset($_POST["submit"]))
	{
		
		
		$_Quantity = $_POST["quantity"];
       
		
		$_dateofselling = $_POST["date"];
		


		
		$sql = "INSERT INTO `tblsell`( `userid`, `productname`,`quantity`, `productprice`, `dateofselling`, `salecompleted`)".
		"VALUES ('$_Quantity','$_dateofselling')";
		$res = mysqli_query($con,$sql);
		if($res)
		{
            die("$sql");
			//echo '<script>window.alert("Product has been successfully saled!"); window.open("add-product.php","_self",null,true)</script>';
		}
		else
		{
			echo '<script>alert("Already inserted this product!")</script>';
		}
	}

?>