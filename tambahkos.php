<?php
	session_start();
	include "koneksi.php";
	
	$user = $_SESSION['user'];
	$untuk = $_POST['untuk'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$harga = $_POST['harga'];
	$jum = $_POST['jum'];
	$luas = $_POST['luas'];
	$km = $_POST['km'];
	$kasur = $_POST['kasur'];
	$tv = $_POST['tv'];
	$ac = $_POST['ac'];
	$foto = $_POST['foto'];
	$peta = $_POST['peta'];
	$folder = "gambarkos/";
	
	/* if (!empty($_FILES['foto']['tmp_name']) && !empty($_FILES['peta']['tmp_name'])) {     
		$jenis_gambar=$_FILES['foto']['type'];    
		$jenis_gambar1 = $_FILES['peta']['type'];
		if(($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png") && ($jenis_gambar1=="image/jpeg" || $jenis_gambar1=="image/jpg" || $jenis_gambar1=="image/gif" || $jenis_gambar1=="image/x-png")) {                    
			$gambar = $folder . basename($_FILES['foto']['name']); 
			$gambar1 = $folder . basename($_FILES['peta']['name']); 			
			if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar) && move_uploaded_file($_FILES['peta']['tmp_name'], $gambar)) {             
				//echo "Gambar berhasil dikirim ".$gambar;             
				$tambah = "INSERT INTO data_kos VALUES(null,'$nama','$alamat','$harga','$luas','$km','$kasur','$tv','$ac','$gambar','$gambar1')";                   
				$querytambah = mysql_query($tambah);
				if($querytambah) {
					echo "<script>alert('Data Berhasil Ditambahkan');location.replace('input.html');</script>";
				} else {
					echo "<script>alert('Data Gagal Ditambahkan');location.replace('input.html');</script>";
					//echo mysql_error();
				}
			} else {            
				echo "<script>alert('Gambar gagal dikirim');</script>";         
			}    
		} else {         
			echo "<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png');</script>";    
		} 
	} else {    
		echo "<script>alert('Anda belum memilih gambar');</script>"; 
	}  */
	
	if (!empty($_FILES['foto']['tmp_name'])) {     
		$jenis_gambar=$_FILES['foto']['type'];    
		$jenis_gambar1 = $_FILES['peta']['type'];
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png") {                    
			$gambar = $folder . basename($_FILES['foto']['name']); 
			$gambar1 = $folder . basename($_FILES['peta']['name']); 			
			if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {             
				//echo "Gambar berhasil dikirim ".$gambar;             
				$tambah = "INSERT INTO data_kos VALUES(null,'$untuk','$nama','$alamat','$harga','$jum','$luas','$km','$kasur','$tv','$ac','$gambar','$user')";                   
				$querytambah = mysql_query($tambah);
				if($querytambah) {
					echo "<script>alert('Data Berhasil Ditambahkan');location.replace('inputdatakos.php');</script>";
				} else {
					echo "<script>alert('Data Gagal Ditambahkan');location.replace('inputdatakos.php');</script>";
					//echo mysql_error();
				}
			} else {            
				echo "<script>alert('Gambar gagal dikirim');location.replace('inputdatakos.php');</script>";         
			}    
		} else {         
			echo "<script>alert('Jenis gambar yang anda kirim salah. Harus .jpg .gif .png');location.replace('inputdatakos.php');</script>";    
		} 
	} else {    
		echo "<script>alert('Anda belum memilih gambar');location.replace('inputdatakos.php');</script>"; 
	} 
?>