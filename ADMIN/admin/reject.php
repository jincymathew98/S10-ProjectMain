<?php
session_start();


$con=mysqli_connect("localhost","root","","test")or die("Couldn't connect to server");
//$id=$_GET['id'];

 
 //$sql = "UPDATE ebook_table set status = 'Approved' WHERE 
 //(SELECT l.l_id, e.l_id from login l, ebook_table e WHERE e.l_id = l.l_id))";
 
 if(isset($_REQUEST['y']))
{
	$a=intval($_GET['y']);
 
 
 $sql = "select  order_id,name,email,phone,address,payment_mode,products,paid_amount  from orders ";
    $result = mysqli_query($con,$sql);
   //die($result);

    while($row = mysqli_fetch_assoc($result))
    {
       
        $querry = "UPDATE orders set status = 0 WHERE order_id = $a";
        $res = mysqli_query($con,$querry);
       

    }
    

    //die($row);
 //$res = mysqli_query($con,$sql);
if($res)

    {

        ?>
        <script>alert("Order rejected");  
        location.href="invoices.php";</script>
        <?php
           
        // echo'<script>alert("Rejected ")</script>';
     //header("location:../admin_approve_ebook.php");
      //echo"<div id ='out'>Reject</div>";
  }

    else{
        ?>
     <script>alert("Error occurred");  
     location.href="admin.php";</script>
     <?php
        
   }

}





?>