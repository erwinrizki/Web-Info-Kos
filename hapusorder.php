<?php
	include "koneksi.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM data_order WHERE id_order='$id'";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		header("location: tampilorder.php");
	} else {
		header("location: tampilorder.php");
	}
?>