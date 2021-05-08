<?php

session_start();
if (!isset($_SESSION['email']))
    die("invalid crediantials");

if (!isset($_GET['ProductID']))
    die("invalid inputs");

// print_r($_GET);die();

require_once("../../essentials.php");
$id = $_GET['ProductID'];
$con = connect();
$query = "select * from tbl_products where ProductID=$id";
$result = mysqli_query($con, $query);

if (!$result)
    die("QUERY is not working");
if (mysqli_num_rows($result) != 1)
    die("Something error");

$row = mysqli_fetch_array($result);
if ($row['action'] == 'Outstock')
    $query2 = "update tbl_products set action='Instock' where ProductID=$id";
else
    $query2 = "update tbl_products set action='Outstock' where ProductID=$id";

mysqli_query($con, $query2);

if (mysqli_affected_rows($con) == 1){
    mysqli_close($con);
    die("SUCCESSFULL");
    //do not change this string, it's used in venor_management ajax section
} else {
    mysqli_close($con);
    die("FAILURE");
    //do not change this string, it's used in venor_management ajax section
}

?>