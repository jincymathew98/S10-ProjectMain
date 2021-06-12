<?php
session_start();


$con=mysqli_connect("localhost","root","","test")or die("Couldn't connect to server");
//$id=$_GET['id'];

 
 //$sql = "UPDATE ebook_table set status = 'Approved' WHERE 
 //(SELECT l.l_id, e.l_id from login l, ebook_table e WHERE e.l_id = l.l_id))";
 
 if(isset($_REQUEST['x']))
{
	$a=intval($_GET['x']);
 
 
 $sql = "select  order_id,name,email,phone,address,payment_mode,products,paid_amount  from orders";
    $result = mysqli_query($con,$sql);
   //die($result);

    while($row = mysqli_fetch_assoc($result))
    {
       
        $querry = "UPDATE orders set status = 1 WHERE order_id = $a";
        $res = mysqli_query($con,$querry);
       

    }
    

    //die($row);
 //$res = mysqli_query($con,$sql);
if($res)

    {
      

        ?>
        <script>alert("Approved order");  
        location.href="invoices.php";</script>
        <?php
           
     // header("location:../admin_approve_ebook.php");
    //   echo'<script>alert("Approved ")</script>';
     //header("location:admin.php");
  }

    else{

        ?>
     <script>alert("Error occured in approval");  
     location.href="admin.php";</script>
     <?php
        
   }

}





?>