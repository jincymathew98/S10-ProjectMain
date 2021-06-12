<?php
session_start();


require('../include/dbconnection.php');
//$id=$_GET['id'];

 
 //$sql = "UPDATE ebook_table set status = 'Approved' WHERE 
 //(SELECT l.l_id, e.l_id from login l, ebook_table e WHERE e.l_id = l.l_id))";
 
 if(isset($_REQUEST['x']))
{
	$a=intval($_GET['x']);
 
 
 $sql = "select distinct sellid,userid,productname,quantity,productprice,dateofselling  from tblsell ";
    $result = mysqli_query($con,$sql);
   //die($result);

    while($row = mysqli_fetch_assoc($result))
    {
       
        $querry = "UPDATE tblsell set status = 1 WHERE sellid = $a";
        $res = mysqli_query($con,$querry);
       

    }
    

    //die($row);
 //$res = mysqli_query($con,$sql);
if($res)

    {
        
      
     // header("location:../admin_approve_ebook.php");
      echo'<script>alert("Approved ")</script>';
     //header("location:admin.php");
  }

    else{
        echo 'ERRORR!!!!';
   }

}





?>