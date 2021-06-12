<?php
session_start();


require('include/dbconnection.php');

header('Content-type: application/vnd-ms-excel');
$filename = "sellerdetails.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");

?>

<table class="table table-bordered">
    <thead>
        <th style = "border:3px solid black">No</th>
        <th style = "border:3px solid black">Email</th>
        <th style = "border:3px solid black">ProductName</th>

        <th style = "border:3px solid black">Quantity</th>
       <th style = "border:3px solid black">Amount</th>
       <th style = "border:3px solid black">Date of selling</th>
       <th style = "border:3px solid black">Action</th>
       
       
        </tr>
    </thead>

        <?php
        $count = 1;

                $sql = "SELECT * FROM tblsell";
                $res = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($res))
                {
                    ?>
                    <tbody>
                        <tr>
                            <?php
                                echo "<td>" .$count++ ."</td>";
                                echo "<td>" .$row['userid'] ."</td>" ;
                                echo "<td>" .$row['productname'] ."</td>";
                                echo "<td>" .$row['quantity']  ."</td>";
                                echo  "<td>" .$row ['productprice'] ."</td>";
                                 echo "<td>" .$row['dateofselling'] ."</td>";
                                


                }

        ?>