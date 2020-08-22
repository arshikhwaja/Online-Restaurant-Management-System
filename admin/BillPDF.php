<?php 

	session_start();
require('connection.php');
	
$tbl_name="orders";

mysqli_select_db($conn,"$db_name") or die("cannot select db");



?>





<?php

require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(75 ,5,' ',0,0);
$pdf->Cell(65 ,5,'Restro Girls',0,1);
$pdf->ln(10);


//set font to arial, regular, 12pt
$pdf->SetFont('Arial','B',12);

$sql1="SELECT * from $tbl_name where username='".$_GET['user']."' and orderID='".$_GET['id']."'";
$result=$conn->query($sql1);

$row=mysqli_fetch_array($result);

$pdf->Cell(30 ,5,'',0,0);
$pdf->Cell(90 ,5,'Order ID: '.$row['orderID'],0,0);
$pdf->Cell(55 ,5,'Username: '.$row['username'],0,0);
$pdf->ln(8);

$pdf->Cell(30 ,5,'',0,0);
$pdf->Cell(90 ,5,'Food: '.$row['foodname'],0,0);
$pdf->Cell(55 ,5,'Date: '.$row['date'],0,0);
$pdf->ln(8);

$pdf->Cell(30 ,5,'',0,0);
$pdf->Cell(90 ,5,'Amount: '.$row['price'],0,0);
$pdf->Cell(55 ,5,'Quantity: '.$row['quantity'],0,0);
$pdf->ln(8);

$pdf->Cell(30 ,5,'',0,0);
$pdf->Cell(90 ,5,'-----------------------------------------------------------------------------------------------------');
$pdf->ln(8);

$pdf->Cell(30 ,5,'',0,0);
$total=$row['price']*$row['quantity'];
$pdf->Cell(90 ,5,'Total: ',0,0);
$pdf->Cell(55 ,5,''.$total,0,0);
$pdf->ln(8);

$pdf->Cell(30 ,5,'',0,0);
$pdf->Cell(90 ,5,'-----------------------------------------------------------------------------------------------------');
$pdf->ln(10);

$pdf->Cell(30 ,5,'',0,0);
$pdf->Cell(90 ,5,'Contact us: +91 8291341278');
$pdf->Cell(50 ,5,'Visit: http://RestroGirls.in',0,0);

	$pdf->ln(20);
	$pdf->Cell(73 ,20,' ',0,0);
	$pdf->Cell(55 ,5,'Thank You! Visit Again :)',0,1);
	$pdf->ln(5);
	
	
	
	

$pdf->Output();
?>