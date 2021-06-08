<?php
session_start();


$con=mysqli_connect("localhost","root","","test")or die("Couldn't connect to server");
//$id=$_GET['id'];

 
 //$sql = "UPDATE ebook_table set status = 'Approved' WHERE 
 //(SELECT l.l_id, e.l_id from login l, ebook_table e WHERE e.l_id = l.l_id))";
 
 if(isset($_REQUEST['y']))
{
	$a=intval($_GET['y']);
 
 
 $sql = "select distinct sellid,userid,productname,quantity,productprice,dateofselling  from tblsell";
    $result = mysqli_query($con,$sql);
   //die($result);

    while($row = mysqli_fetch_assoc($result))
    {
       
        $querry = "UPDATE tblsell set status = 0 WHERE sellid = $a";
        $res = mysqli_query($con,$querry);
       

    }
    

    //die($row);
 //$res = mysqli_query($con,$sql);
if($res)

    {
        echo'<script>alert("Rejected ")</script>';
     //header("location:../admin_approve_ebook.php");
      //echo"<div id ='out'>Reject</div>";
  }

    else{
        echo 'ERRORR!!!!';
   }

}





?>