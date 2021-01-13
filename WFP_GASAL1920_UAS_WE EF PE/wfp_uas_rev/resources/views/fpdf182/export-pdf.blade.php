<?php // memanggil library FPDF
require('fpdf182/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
// $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
// $pdf->SetFont('Arial','B',12);
// $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'No',1,0);
$pdf->Cell(85,6,'Nama',1,0);
$pdf->Cell(27,6,'Nominal',1,0);
$pdf->Cell(25,6,'Keterangan',1,1);
$pdf->Cell(25,6,'Kategori',1,1);
 
$pdf->SetFont('Arial','',10);
?>

@foreach($datas as $no => $data)
{
	$pdf->Cell(20,6,{{$no++}},1,0);
    $pdf->Cell(20,6,{{$data->created_at}},1,0);
    $pdf->Cell(85,6,{{$data->nama}},1,0);
    $pdf->Cell(27,6,{{$data->nominal}},1,0);
    $pdf->Cell(25,6,{{$data->keterangan}},1,1); 
    $pdf->Cell(25,6,{{$data->kategoris_id}},1,1);
}
@endforeach
<?php 
$pdf->Output();
 ?>