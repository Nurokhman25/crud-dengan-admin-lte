<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','Legal');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,10,'NO',1,0,'C');
$pdf->Cell(85,10,'NAMA',1,0,'C');
$pdf->Cell(40,10,'TANGGAL LAHIR',1,0,'C');
$pdf->Cell(45,10,'ALAMAT',1,1,'C');

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$query = mysqli_query($conn, "select * from user");
$no = 1;
while ($row = mysqli_fetch_array($query)){
	$pdf->Cell(10,8,$no,1,0,'C');
    $pdf->Cell(85,8,$row['nama'],1,0);
    $pdf->Cell(40,8,$row['tanggal_lahir'],1,0);
    $pdf->Cell(45,8,$row['alamat'],1,1);

$no++;
}

$pdf->Output();
?>
