<?php
require_once "includes/config.php";

if(isset($_POST["submit"]))
{
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$pmode = $_POST["pmode"];
	$products = $_POST["products"];
	$grand_total = $_POST["grand_total"];
   
	
    $insert_stmt=mysqli_query("INSERT INTO orders(name, email,phone, address,payment_mode,products,paid_amount) VALUES ('$name','$email','$phone','address','$pmode','$products','$grand_total')"); 	

    <div class="text-center">
    <h1 class="display-4 mt-2 text-danger">Thank You!</h1>
    <h2>Your Order Placed Successfully!</h2>
    <h4 class="bg-danger text-light rounded p-2">Items Purchased : '.$products.'</h4>
    <h4>Your Name : '$name.' </h4>			
    <h4>Your E-mail : '.$email.' </h4>			
    <h4>Your Phone : '.$phone.'  </h4>			
    <h4>Total Amount Paid : '.number_format($grand_total,2).' </h4>			
    <h4>Payment Mode : '.$pmode.' </h4>			
    
</div>
}

?>