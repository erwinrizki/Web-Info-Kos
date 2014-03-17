<?php
	include "ceksesi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Informasi Kos Sekitar Udinus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Informasi Kos di Udinus</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="panelmember.html">Home</a></li>
			  <li class="active"><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <img width="1000" height="500" src="images/header.jpg" class="img-rounded">
      </div>

      <!-- Example row of columns -->
      <div class="hero-unit">
		<h3>Data Kos</h3><br/><br/>
        <form method="POST" action="updatekos.php" enctype="multipart/form-data">
		<center>
		<table border="0" cellpadding="5" cellspacing="0">
		<tbody>
		<?php
			include "koneksi.php";
			
			$id = $_GET['id'];
			$tampil = "SELECT * FROM data_kos WHERE id_kos='$id';";
			$querytampil = mysql_query($tampil);
			$hasil = mysql_fetch_array($querytampil);
			$untuk = $hasil['untuk'];
			$namakos = $hasil['namakos'];
			$alamat = $hasil['alamatkos'];
			$harga = $hasil['harga'];
			$jum = $hasil['jumlahkamar'];
			$luas = $hasil['luas'];
			$km = $hasil['km'];
			$kasur = $hasil['kasur'];
			$tv = $hasil['tv'];
			$ac = $hasil['ac'];
		?>
		<tr>
            <td>Kos Untuk</td>
            <td>:</td>
            <td>
				<select name="untuk">
					<option value="Laki-Laki" <?php if($untuk=="Laki-Laki") echo "selected"; ?>>Laki-Laki</option>
					<option value="Perempuan" <?php if($untuk=="Perempuan") echo "selected"; ?>>Perempuan</option>
				</select>
			</td>
        </tr>
		<tr>
            <td>Nama Kos</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="20" required="required" value="<?php echo $namakos; ?>" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" maxlength="50" required="required" value="<?php echo $alamat; ?>" /></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="harga" maxlength="100" required="required" value="<?php echo $harga; ?>" /></td>
        </tr>
		<tr>
            <td>Jumlah Kamar</td>
            <td>:</td>
            <td><input type="text" name="jum" maxlength="100" required="required" value="<?php echo $jum; ?>"/></td>
        </tr>
        <tr>
            <td><u>Fitur</u></td>
            <td>:</td>
            <td><input type="hidden" name="id" value="<?php echo $id; ?>" /></td>
        </tr>
        <tr>
            <td>Luas Kamar</td>
            <td>:</td>
            <td><input type="text" name="luas" required="required" value="<?php echo $luas; ?>" /></td>
        </tr>
        <tr>
            <td>Kamar mandi (dalam/luar)</td>
            <td>:</td>
            <td>
				<select name="km">
					<option value="Dalam" <?php if($km=="Dalam") echo "selected"; ?>>Dalam</option>
					<option value="Luar" <?php if($km=="Luar") echo "selected"; ?>>Luar</option>
				</select>
			</td>
        </tr>
        <tr>
            <td>Kasur</td>
            <td>:</td>
            <td><input type="text" name="kasur" required="required" value="<?php echo $kasur; ?>" /></td>
        </tr>
        <tr>
            <td>TV (ada/tidak)</td>
            <td>:</td>
            <td>
				<select name="tv">
					<option value="Ada" <?php if($tv=="Ada") echo "selected"; ?>>Ada</option>
					<option value="Tidak" <?php if($tv=="Tidak") echo "selected"; ?>>Tidak</option>
				</select>
			</td>
        </tr>
		<tr>
            <td>AC (ada/tidak)</td>
            <td>:</td>
            <td>
				<select name="ac">
					<option value="Ada" <?php if($ac=="Ada") echo "selected"; ?>>Ada</option>
					<option value="Tidak" <?php if($ac=="Tidak") echo "selected"; ?>>Tidak</option>
				</select>
			</td>
        </tr>
		<tr>
			<td>Foto Kos</td>
            <td>:</td>
            <td>
				<input type="file" name="foto" accept="image/*" />
			</td>
		</tr>
		<!-- <tr>
			<td>Peta Kos</td>
            <td>:</td>
            <td>
				<input type="file" name="peta" accept="image/*" />
			</td>
		</tr> -->
        <tr>
            <td align="center" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
		</tbody>
		</table>
		</center>
		</form>
      </div>

      <hr>

      <footer>
        <p>Copyright &copy; ERA, AR, SL, EAS 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
