<?php
session_start();
include_once 'includes/config.php';
if(!empty($_GET['oid']))
 {
     $oid=$_GET['oid']; 
?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Order Tracking Details</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Order Tracking Details !</b></div></td>
      
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>order Id:</b></td>
      <td  class="fontkink"><?php echo mt_rand(10000,99999); ?></td>
    </tr>
    </body>
    <?php 
$ret = mysqli_query($con,"SELECT order_id,status FROM orders WHERE order_id='$oid'");
$num=mysqli_num_rows($ret);
if($num>0)
{
while($row=mysqli_fetch_array($ret))
      {
    

									if ($row['status']== 0)
                  {  
                           echo "<td>Status: Order processing only </td>";
                     
                  }
         
             
          elseif($row['status'] == 1)
              {
                     echo "<td>Product delivered</td>" ;
              }
          else 
          {
                 echo "<td> Cancelled </td>" ;
          } 
       }
   } 
  ?>
              </table>
              </form>
              </div>

<?php
}
?>


</body>
</html>

     