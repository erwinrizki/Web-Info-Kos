<?php
	$host = "localhost";
	$user = "root";
	$pass = "apem";
	$db = "kos";
	
	$koneksi = mysql_connect($host,$user,$pass);
	$pilihdb = mysql_select_db($db,$koneksi);
?>