<?php
require('fpdf.php');
$pdf = new FPDF('l','mm','A5');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'SMA KODING',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,"Name",1,0);
$pdf->Cell(40,6,"Age",1,0);
$pdf->Cell(100,6,"Email",1,1);

$pdf->SetFont('Arial','',10);



include 'config.php';
$mahasiswa = mysqli_query($mysqli, "select * from siswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(50,6,$row['name'],1,0);
    $pdf->Cell(40,6,$row['age'],1,0);
    $pdf->Cell(100,6,$row['email'],1,1);
}

$pdf->Output();
?>