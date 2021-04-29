<?php
include_once 'dbconnection.php';
$sql = "DELETE FROM tbl_products WHERE ProductID='" . $_GET["ProductID"] . "'";
if (mysqli_query($con, $sql)) {
    echo '<script>window.alert("Product has been successfully deleted!"); window.open("Management_ProductsList.php","_self",null,true)</script>';

} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>