<?php

	session_start();
	
	
	require 'dbconnection.php';
	
	
	if(isset($_POST["btndel"]))
	{  
		    $_ProductID=$_POST["ProductID"];
			$_ProductName = $_POST["ProductName"];
			$_ProductBrand = $_POST["ProductBrand"];
			$_ProductSize = $_POST["ProductSize"];
			
			$_ProductCategory = $_POST["ProductCategory"];
			$_ProductPrice = $_POST["ProductPrice"];
			
			$image = addslashes($_FILES['ProductImage']['tmp_name']);
			$name = addslashes($_FILES['ProductImage']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
			
			
			
				$sql = "UPDATE `tbl_products` SET  `Productname`='$_ProductName',`ProductBrand`='$_ProductBrand',`ProductSize`='$_ProductSize'," .
					   ",`ProductPrice`='$_ProductPrice',`ProductCategory`='$_ProductCategory' WHERE `ProductID` =  $_ProductID";
					   $res = mysqli_query($con,$sql);
				if($res)
				{
					echo '<script>window.alert("Product has been successfully updated!"); window.open("admin.php","_self",null,true)</script>';
				}
			
		}
		?>