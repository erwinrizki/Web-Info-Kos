<?php
	include "koneksi.php";
	
	$nama = $_POST['nama_depan'];
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	$tl = $_POST['tempat_lahir'];
	@$tanggal = $_POST['tanggal'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['notel'];
	$email = $_POST['email'];
	
	$tambah = "INSERT INTO member VALUES(null,'$nama','$user','$pass','$tl','$tanggal','$alamat','$telp','$email');";
	$querytambah = mysql_query($tambah);
	
	if($querytambah) {
		echo "<script>alert('Data Berhasil Ditambahkan');location.replace('inputdatamember.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatamember.php');</script>";
	}
?>