<?php
//PDF USING MULTIPLE PAGES
//FILE CREATED BY: Carlos José Vásquez Sáez
//YOU CAN CONTACT ME: carlos@magallaneslibre.com
//FROM PUNTA ARENAS, MAGALLANES
//INOVO GROUP - http://www.inovo.cl
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resumemaker";



$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


define('FPDF_FONTPATH', 'font/');
require('fpdf.php');

//Connect to your database
//include("conectmysql.php");

//Create new pdf file
$pdf=new FPDF();

//Open file
$pdf->Open();

//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage();

//set initial y axis position per page
$y_axis_initial = 25;

//print column titles for the actual page
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY($y_axis_initial);
$pdf->SetX(25);
$pdf->Cell(30, 6, 'CODE', 1, 0, 'L', 1);
$pdf->Cell(100, 6, 'NAME', 1, 0, 'L', 1);
$pdf->Cell(30, 6, 'PRICE', 1, 0, 'R', 1);

$y_axis = $y_axis + $row_height;

//Select the Products you want to show in your PDF file
$result=mysql_query('SELECT * FROM `resume` WHERE `id`=15 ');

//initialize counter
$i = 0;

//Set maximum rows per page
$max = 25;

//Set Row Height
$row_height = 6;

while($row = mysql_fetch_array($result))
{
    //If the current row is the last one, create new page and print column title
    if ($i == $max)
    {
        $pdf->AddPage();

        //print column titles for the current page
        $pdf->SetY($y_axis_initial);
        $pdf->SetX(25);
        $pdf->Cell(30, 6, 'CODE', 1, 0, 'L', 1);
        $pdf->Cell(100, 6, 'NAME', 1, 0, 'L', 1);
        $pdf->Cell(30, 6, 'PRICE', 1, 0, 'R', 1);
        
        //Go to next row
        $y_axis = $y_axis + $row_height;
        
        //Set $i variable to 0 (first row)
        $i = 0;
    }
    echo "$row[name]";
    $code = $row[name];
    $price = $row[email];
    $name = $row[phone];

    $pdf->SetY($y_axis);
    $pdf->SetX(25);
    $pdf->Cell(30, 6, $code, 1, 0, 'L', 1);
    $pdf->Cell(100, 6, $name, 1, 0, 'L', 1);
    $pdf->Cell(30, 6, $price, 1, 0, 'R', 1);

    //Go to next row
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
}


//Create file
$pdf->Output();

mysqli_close($conn);

?>