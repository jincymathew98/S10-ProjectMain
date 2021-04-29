<?php

session_start();
if (!isset($_SESSION['email']))
    die("invalid creds");

if (!isset($_GET['id']))
    die("invalid inputs");

// print_r($_GET);die();

require_once("../../essentials.php");
$id = $_GET['id'];
$con = connect();
$query = "select * from tbl_reg where reg_id=$id";
$result = mysqli_query($con, $query);

if (!$result)
    die("QUERY moonchi");
if (mysqli_num_rows($result) != 1)
    die("ithe vere entho setupa");

$row = mysqli_fetch_array($result);
if ($row['status'] == 0)
    $query2 = "update tbl_reg set status=1 where reg_id=$id";
else
    $query2 = "update tbl_reg set status=0 where reg_id=$id";

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