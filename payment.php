<?php 
//print_r($_GET);
//die();
include('connection.php');


    $name = $_POST["cardname"];
    $no = $_POST["cardno"];
    $month = $_POST["expmonth"];
    $cvno = $_POST["cvv"];
    $expyear = $_POST["year"];
    $pay = $_POST["amount"];

    $sql = "SELECT * FROM tble_payment where status = 'Active'";
    $res = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($res)>0) //(!empty($_POST["carename"])) || (!empty ($_POST["expmonth"])) || (!empty ($_POST["cardno"])) || (!empty($_POST["cvv"])) || (!empty($_POST["year"])))
        {
            

            while($row = mysqli_fetch_assoc($res))
            {
        
                $n = $row['name'];
                $num = $row['card_number'];
                $c = $row['cvv'];
                $mon = $row['exp_month'];
                $year = $row['exp_year'];
                $amnt = $row['Amount'];
                
                /*if(($row['Amount'] != 0) && ($row['Amount'] < $pay ))
                {
                    $querry = "UPDATE tble_payment set Amount = Amount-$pay ";
                    $result = mysqli_query($con,$querry);
                    //header('location: ../user_payment.php');
                    echo '<script>("Success!!!")</script>';
                }
                else{
                    echo '<script>alert("Insufficient Balance")</script>';
                    //header('location: ../user_payment.php');
                    
                }*/
            }
            if($n == $name && $num == $no && $c == $cvno && $mon == $month && $year == $expyear)
                {
                    
                    if($amnt < '500')
                        {   ?>
                        <script LANGUAGE = 'javascript'> window.alert('Insufficient Amount');
                        window.location.href ='../user_payment.php';</script>
                        
                        <?php
                        //header('location: ../user_payment.php');

                    }
                    else 
                    {
                        
                            $querry = "UPDATE tble_payment set Amount = Amount-$pay ";
                            $result = mysqli_query($con,$querry);
                            $temp = $_SESSION['username'];
                             $query = "INSERT INTO tbl_penality (l_id,amount,payed_date, status)
                            values((SELECT l_id from login where username = '$temp'),$pay, now(),'0')";

                            $res = mysqli_query($con, $query);
                            ?>
                        <script LANGUAGE = 'javascript'> window.alert('Successfully Payed');
                        window.location.href ='../user_payment.php';
                        </script>
                        <?php
                        
                    }
                    
                }
                else {
                        ?>
                    <script>alert("Some Values May wrong Re Try Again");
                        window.location.href = '../user_payment.php';
                    </script>
                    
                    <?php
                }
                
                                            /*$temp = $_SESSION['username'];
                                            $query = "INSERT INTO tbl_penality (l_id,amount,payed_date, status)
                                                        values((SELECT l_id from login where username = '$temp'),$pay, now(),'0')";
                                                        $res = mysqli_query($con, $query);
                                                        header('location: ../user_payment.php');*/
          
        }
    else{
        ?>
        <script>
        alert("Fiels is empty");
        </script>
        <?php
    }



?>