<?php
session_start();
require_once 'FPDF/fpdf.php';

$con=mysqli_connect("localhost","root","","test")or die("Couldn't connect to server");


$name = $_SESSION['email'];

$sql = "SELECT * FROM orders where email = '$name'";
$result = mysqli_query($con,$sql);

//$querry = "SELECT * FROM ebook_table";
//$data = mysqli_query($con,$data);
    //if (isset($_POST['generate']))
    //{
        $pdf = new FPDF('p', 'mm','a4');
        $pdf->SetFont('Arial','B',12);
        $pdf->AddPage();
        //$pdf->Cell(10,10,'Student Activity Report','0','0','c');
        
        $pdf->Cell(20,10,'No','1','0','c');
        $pdf->Cell(60,10,'Name','1','0','c');
        $pdf->Cell(40,10,'Email','1','0','c');
        $pdf->Cell(40,10,'Phone','1','0','c');
        $pdf->Cell(40,10,'Address','1','0','c');

     // $pdf->Cell(40,10,'Name','1','1','c');

        $querry = "SELECT name,email,phone,address from orders  where email = '$name'";
        $data = mysqli_query($con,$querry);
        
        $no = 0;
        while ($row = mysqli_fetch_assoc($data))

        {
            $pdf->Cell(20,10, $no++,'1','0','c');
            $pdf->Cell(60,10, $row['name'],'1','0','c');
            $pdf->Cell(60,10, $row['email'],'1','0','c');
            $pdf->Cell(60,10, $row['phone'],'1','0','c');
            $pdf->Cell(40,10, $row['address'],'1','1','c');
            

        }


        $pdf->Output();
    //}

?>