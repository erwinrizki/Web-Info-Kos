<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM data_kos WHERE id_kos='$id'";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		header("location: tampilkos.php");
	} else {
		header("location: tampilkos.php");
	}
?>