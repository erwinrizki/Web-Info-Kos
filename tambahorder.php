<?php
	date_default_timezone_set("Asia/Jakarta");
	include "koneksi.php";
	
	$id = $_POST['idkos'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$comment = $_POST['comment'];
	$date = date('Y-m-d H:i:s');
	
	$tambah = "INSERT INTO data_order VALUES(null,'$id','$nama','$alamat','$telp','$comment','$date');";
	$querytambah = mysql_query($tambah);
	if($querytambah) {
		echo "<script>alert('Order Berhasil Ditambahkan');</script>";
		header("location:detail.php?id=$id");
	}
?>