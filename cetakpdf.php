<?php
	define('FPDF_FONTPATH','fpdf/font/');
	include "koneksi.php";
	require('fpdf/fpdf.php');

	class PDF extends FPDF {
		function Header() {
			$this->Ln();
			$this->Ln();
		}
	}

	$pdf=new PDF('P','cm','Letter');
	$pdf->Open();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetMargins(1,1,1);

	//query dan arraying	
	$id = $_GET['id'];
	$tampil = "SELECT * FROM data_kos AS dk INNER JOIN member AS m ON dk.username = m.username WHERE dk.id_kos='$id'";
	$querytampil = mysql_query($tampil);
	while($hasil = mysql_fetch_array($querytampil)) {
		$p = $hasil['nama'];
		$nama = $hasil['namakos'];
		$alamat = $hasil['alamatkos'];
		$telp = $hasil['notelp'];
		$harga = $hasil['harga'];
		$luas = $hasil['luas'];
		$km = $hasil['km'];
		$tv = $hasil['tv'];
		$ac = $hasil['ac'];
		$kasur = $hasil['kasur'];
		$gambar = $hasil['gambar_kos'];
		
		$pdf->SetFont('Arial','B',18);
		$pdf->Cell(0,2.0,$nama,0,0,'C');
		$pdf->Ln();
		$pdf->SetFont('Arial','',13);
		
		$pdf->Cell(0,1.5,'Nama Kos: ' .$nama,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(3,1.5,'Pemilik Kos: ' .$p,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(6,1.5,'Contact Person: ' .$telp,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(1,1.5,'Alamat Kos: ' .$alamat,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(3,1.5,'Harga: Rp. ' .$harga,0,0,'L');
		$pdf->Ln();
		$pdf->Ln();
		$pdf->SetFont('Arial','B',18);
		$pdf->Cell(3,1.0,'Fitur: ',0,0,'L');
		$pdf->Ln();
		$pdf->SetFont('Arial','',13);
		$pdf->Cell(4.5,1.5,'Luas Kamar: ' .$luas,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(1.5,1.5,'Kasur: ' .$kasur,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(4.5,1.5,'Kamar Mandi: ' .$km,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(1.5,1.5,'AC: ' .$ac,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(1.5,1.5,'TV: ' .$tv,0,0,'L');
		$pdf->Ln();
		$pdf->Cell(1.5,2.5,'Gambar Kos: ',0,0,'L');
		$pdf->Image($gambar,7,19,10,8);
	}
	
	$pdf->Output();
?>