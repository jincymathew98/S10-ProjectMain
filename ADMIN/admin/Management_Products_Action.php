<?php

	session_start();
	
	
	require 'Connection.php';
	
	
	if(isset($_POST["btnadd"]))
	{
		$_ProductName = $_POST["ProductName"];
		$_ProductBrand = $_POST["ProductBrand"];
		$_ProductSize = $_POST["ProductSize"];
		
		$_ProductCategory = $_POST["ProductCategory"];
		$_ProductPrice = $_POST["ProductPrice"];
		
		$image = addslashes($_FILES['ProductImage']['tmp_name']);
		$name = addslashes($_FILES['ProductImage']['name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);


		
		$sql = "INSERT INTO `tbl_products`(`Productname`, `ProductBrand`, `ProductSize`,`ProductPrice`, `ProductCategory`, `ProductImageName`, `ProductImage`)" . 
		"VALUES ('$_ProductName','$_ProductBrand','$_ProductSize','$_ProductPrice','$_ProductCategory','$name','$image')";
		$res = mysqli_query($Conn,$sql);
		if($res)
		{
			echo '<script>window.alert("Product has been successfully Inserted!"); window.open("Management_ProductsList.php","_self",null,true)</script>';
		}
		else
		{
			echo '<script>alert("Already inserted this product!")</script>';
		}
	}

?>