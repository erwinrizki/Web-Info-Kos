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
	<?php
		$k = $_GET['kos'];
		$untuk = "";
		
		if($k=="lk") {
			$untuk = "Laki-Laki";
		} else {
			$untuk = "Perempuan";
		}
	?>
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
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nama Jalan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=jalan&&jln=nakula">Jalan Nakula</a></li>
				  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=jalan&&jln=nakular">Jalan Nakula Raya</a></li>
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=jalan&&jln=arjuna">Jalan Arjuna</a></li>
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=jalan&&jln=bima">Jalan Bima</a></li>
				  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=jalan&&jln=sadewa">Jalan Sadewa</a></li>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=fas&&fas=ac">AC</a></li>
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=fas&&fas=tv">TV</a></li>
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=fas&&fas=km">Kamar Mandi Dalam</a></li>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Harga <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=harga&&hrg=200">200rb - 300rb</a></li>
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=harga&&hrg=350">350rb - 400rb</a></li>
                  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=harga&&hrg=450">450rb - 500rb</a></li>
				  <li><a href="carikos.php?tipe=<?php echo $untuk; ?>&&opsi=harga&&hrg=500">> 500rb</a></li>
                </ul>
              </li>
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
		<h2>Kos <?php echo $untuk; ?></h2><br/>
		<table border="0" cellspacing="40" class="table table-striped">
			<?php
				include "koneksi.php";
				
				$kos = $_GET['kos'];
				if($kos=="lk") {
					$tampil = "SELECT * FROM data_kos AS dk INNER JOIN member AS m ON dk.username = m.username WHERE dk.untuk='Laki-Laki'";
					$querytampil = mysql_query($tampil);
					while($hasil = mysql_fetch_array($querytampil)) {
						$id = $hasil['id_kos'];
						$nama = $hasil['namakos'];
						$alamat = $hasil['alamatkos'];
						$telp = $hasil['notelp'];
						$harga = $hasil['harga'];
						$gambar = $hasil['gambar_kos'];
						
			?>
						<tr>
							<td><img src="<?php echo $gambar; ?>" width="320" height="320" class="img-rounded" /></td>
							<td>
								<a href="detail.php?id=<?php echo $id; ?>" ><h3><?php echo $nama; ?></h3></a><br/>
								<?php echo $alamat; ?><br/>
								Contact Person: <?php echo $telp; ?><br/>
								Harga: Rp. <?php echo $harga; ?>
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr/></td>
						</tr>
			<?php
					}
				} else {
					$tampil = "SELECT * FROM data_kos AS dk INNER JOIN member AS m ON dk.username = m.username WHERE dk.untuk='Perempuan'";
					$querytampil = mysql_query($tampil);
					while($hasil = mysql_fetch_array($querytampil)) {
						$id = $hasil['id_kos'];
						$nama = $hasil['namakos'];
						$alamat = $hasil['alamatkos'];
						$telp = $hasil['notelp'];
						$harga = $hasil['harga'];
						$gambar = $hasil['gambar_kos'];
			?>
						<tr>
							<td><img src="<?php echo $gambar; ?>" width="320" height="320" /></td>
							<td>
								<a href="detail.php?id=<?php echo $id; ?>" ><h3><?php echo $nama; ?></h3></a><br/>
								<?php echo $alamat; ?><br/>
								Contact Person: <?php echo $telp; ?><br/>
								Harga: Rp. <?php echo $harga; ?>
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr/></td>
						</tr>
			<?php
					}
				}
			?>
		</table>
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
