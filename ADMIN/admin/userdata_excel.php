<?php
session_start();


$con=mysqli_connect("localhost","root","","test")or die("Couldn't connect to server");

header('Content-type: application/vnd-ms-excel');
$filename = "orders.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");

?>

<table class="table table-bordered">
    <thead>
        <th style = "border:3px solid black">No</th>
        <th style = "border:3px solid black">Name</th>
        <th style = "border:3px solid black">Email</th>
       <th style = "border:3px solid black">Phone No.</th>
       <th style = "border:3px solid black">Payment mode</th>
       <th style = "border:3px solid black">Products</th>
       <th style = "border:3px solid black">Amount</th>
       
        </tr>
    </thead>

        <?php
        $count = 1;

                $sql = "SELECT * FROM orders";
                $res = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($res))
                {
                    ?>
                    <tbody>
                        <tr>
                            <?php
                                echo "<td>" .$count++ ."</td>";
                                echo "<td>" .$row['name'] ."</td>" ;
                                echo "<td>" .$row['email'] ."</td>";
                                echo "<td>" .$row['phone']  ."</td>";
                                echo  "<td>" .$row ['payment_mode'] ."</td>";
                                 echo "<td>" .$row['products'] ."</td>";
                                 echo "<td>" .$row['paid_amount'] ."</td>";


                }

        ?>