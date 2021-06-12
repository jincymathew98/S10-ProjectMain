<?php
require('include/dbconnection.php');
session_start();
if(!empty($_SESSION['email']))
 {
     $temp=$_SESSION['email'];
 ?>
               


                <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<div align ="right">
                <a class="btn btn-primary" href="sellerdata.php" role="button">Generate</a>
                </div><br>

<table class="table">
    <thead >
      <tr  class="table-primary">
      <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Quantity</th>
        <th scope="col">Amount</th>
        <th scope="col">Date of selling</th>
        <th scope="col">Action</th>


      </tr>
    </thead>
   
    <?php 
									require 'Connection.php';
									$sql = "select * from tblsell";
									$Resulta = mysqli_query($Conn,$sql);
                                    $cnt=1;
									while($Rows = mysqli_fetch_array($Resulta)):; 
								?>
								<tr style="color: black">
	
                                <td><?php echo $cnt;?></td>
									<td><?php echo $Rows["userid"]; ?></td>
									<td><?php echo $Rows["quantity"]; ?></td>
									<td><?php echo $Rows["productprice"]; ?></td>
									<td><?php echo $Rows["dateofselling"]; ?></td>
                                  
									<td>
                                    <!-- <a href="pdf_report.php?ProductID=<?php echo $Rows[0]; ?> "  onclick="ProductOnlick('Edit',<?php echo $Rows[0]; ?>)">Download</a>| -->
									<!-- <a href="delete.php?ProductID=<?php echo $Rows[0]; ?> "   onclick="ProductOnlick('Delete',<?php echo $Rows[0]; ?>)">Delete</a>   -->
									
									</td>
									<?php 
                                  
                                 $cnt++;
                                
                                endwhile; ?>
  </table>
  
  
               
    <?php
    }
    else
    {
        header("location:login.html");
    }
    ?>

</body>

</html>