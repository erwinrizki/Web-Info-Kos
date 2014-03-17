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
          <a class="brand" href="index.php">Informasi Kos di Udinus</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>
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
		<table border="0" cellspacing="40" class="table table-striped">
			<?php
				include "koneksi.php";
				
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
						
			?>
					<tr>
						<td colspan="3" align="center"><h2><?php echo $nama; ?></h2></td>
					</tr>
					<tr>
						<td>Nama Kos</td>
						<td>:</td>
						<td><?php echo $nama; ?></td>
					</tr>
					<tr>
						<td>Pemilik Kos</td>
						<td>:</td>
						<td><?php echo $p; ?></td>
					</tr>
					<tr>
						<td>Contact Person</td>
						<td>:</td>
						<td><?php echo $telp; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><?php echo $alamat; ?></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td>Rp. <?php echo $harga; ?></td>
					</tr>
					<tr>
						<td>Fitur</td>
						<td>:</td>
						<td>
							- Luas Kamar: <?php echo $luas; ?><br/>
							- Kasur : <?php echo $kasur; ?><br/>
							- Kamar Mandi: <?php echo $km; ?><br/>
							- AC: <?php echo $ac; ?><br/>
							- TV: <?php echo $tv; ?>
						</td>
					</tr>
					<tr>
						<td>Gambar Kos</td>
						<td>:</td>
						<td><img src="<?php echo $gambar; ?>" width="320" height="320" class="img-rounded" /></td>
					</tr>
					<tr>
						<td>Download PDF</td>
						<td>:</td>
						<td><a href="cetakpdf.php?id=<?php echo $id; ?>"><img src="images/cetakpdf.png" class="img-rounded" /></a></td>
					</tr>
					<tr>
						<td colspan="3"><hr/></td>
					</tr>
			<?php
					}
			?>	
		</table>
		<br/>
		<hr/>
		<h3>Comment/Order</h3><br/>
		<form enctype="multipart/form-data" method="POST" action="tambahorder.php">
		<table border="0" cellspacing="15">
			<tr>
				<td width="250"><b>Nama</b></td>
				<td width="30">:</td>
				<td><input type="text" name="nama" size="30" required="required" /></td>
			</tr>
			<tr>
				<td><b>Alamat</b></td>
				<td>:</td>
				<td>
					<input type="text" name="alamat" size="50" />
					<input type="hidden" name="idkos" value="<?php echo $id; ?>" />
				</td>
			</tr>
			<tr>
				<td><b>No.Telp</b></td>
				<td>:</td>
				<td><input type="text" name="telp" size="20" /></td>
			</tr>
			<tr>
				<td><b>Comment</b></td>
				<td>:</td>
				<td>
					<TEXTAREA NAME="comment" cols=70 rows=10></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><INPUT TYPE=SUBMIT VALUE="Kirim" ></td>
				<td><INPUT TYPE=RESET VALUE="Reset"></td>
			</tr>
		</table>
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
