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

		$li = "select * from tbl_products where Productname='$_ProductName'";
		$result=mysqli_query($Conn,$li);
		if(mysqli_num_rows($result)<1)
		{
		
		
		$sql = "INSERT INTO `tbl_products`(`Productname`, `ProductBrand`, `ProductSize`,`ProductPrice`, `ProductCategory`, `ProductImageName`, `ProductImage`)" . 
		"VALUES ('$_ProductName','$_ProductBrand','$_ProductSize','$_ProductPrice','$_ProductCategory','$name','$image')";

		if( mysqli_query($Conn,$sql))
	
		{
			?>
			<script>alert("Products added successfully");  
			location.href="Management_ProductsList.php";</script>
			<?php
			
		}
	}
	   
		else
		{
			  
			?>
			<script>alert("Already added product!!");  
			location.href="Management_Products.php";</script>
			<?php
				  
			
		}
	
	
}

?>