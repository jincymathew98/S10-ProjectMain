<?php
session_start();
require_once 'FPDF/fpdf.php';

$con=mysqli_connect("localhost","root","","test")or die("Couldn't connect to server");


$name = $_SESSION['email'];

$sql = "SELECT email FROM tbl_login  where email = '$name'";
$result = mysqli_query($con,$sql);

//$querry = "SELECT * FROM ebook_table";
//$data = mysqli_query($con,$data);
    //if (isset($_POST['generate']))
    //{
        $pdf = new FPDF('p', 'mm','a4');
        $pdf->SetFont('Arial','B',12);
        $pdf->AddPage();
        //$pdf->Cell(10,10,'Student Activity Report','0','0','c');
        $pdf->Cell(40,10,'Name','0','0','c');
        $pdf->Cell(40,10, $name,'0','0','c');
        $pdf->Ln(15);
        $pdf->Cell(20,10,'No','1','0','c');
        $pdf->Cell(60,10,'Product Name','1','0','c');
        $pdf->Cell(40,10,'Product Price','1','1','c');
     // $pdf->Cell(40,10,'Name','1','1','c');

        $querry = "SELECT  l.lid, l.email,p.Productname ,p.ProductPrice
        FROM tbl_products p, tbl_login l where email = '$name'";
        $data = mysqli_query($con,$querry);
        
        $no = 0;
        while ($row = mysqli_fetch_assoc($data))

        {
            $pdf->Cell(20,10, $no++,'1','0','c');
            $pdf->Cell(60,10, $row['Productname'],'1','0','c');
            $pdf->Cell(40,10, $row['ProductPrice'],'1','1','c');
            

        }


        $pdf->Output();
    //}

?>