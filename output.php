<?php

use phpDocumentor\Reflection\Types\Integer;
session_start();
$_SESSION['items'] = $_POST['items'];
$_SESSION['companyname'] = $_POST['companyname'];
$_SESSION['clientname'] = $_POST['clientname'];
$companyName = $_SESSION['companyname'];
$clientName = $_SESSION['clientname'];
$total = 0;
foreach ($_SESSION['items'] as $value) {
    $total += intval($value);
}
require('fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,"$total", 0, 1);
$pdf->Cell(40,10,"$companyName", 0, 1);
$pdf->Cell(40,10,"$clientName", 0, 1);
$pdf->Output();
?>