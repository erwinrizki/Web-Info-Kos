
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
          <a class="brand" href="index.php">Informasi Kos di Udinus</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Home</a></li>
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
		<h2>Daftar Kos</h2><br/>
		<table border="0" cellspacing="40" class="table table-hover">
			<tr>
				<td><h4>No</h4></td>
				<td><h4>Foto Kos</h4></td>
				<td><h4>Nama Kos</h4></td>
				<td><h4>Aksi</h4></td>
			</tr>
			<?php
				session_start();
				include "koneksi.php";
				
				$user = $_SESSION['user'];
				$no = 1;
				$tampil = "SELECT * FROM data_kos WHERE username='$user'";
				$querytampil = mysql_query($tampil);
				while($hasil = mysql_fetch_array($querytampil)) {
					$id = $hasil['id_kos'];
					$nama = $hasil['namakos'];
					$gambar = $hasil['gambar_kos'];
						
			?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><img src="<?php echo $gambar; ?>" width="320" height="320" class="img-rounded" /></td>
						<td>
							<?php echo $nama; ?>
						</td>
						<td>
							<a href="formupdatekos.php?id=<?php echo $id; ?>"><img height="40" width="40" src="images/update.png"  title="update"  /></a>
							<a href="hapuskos.php?id=<?php echo $id; ?>"><img height="40" width="40" src="images/delete.png"  title="hapus" onclick="return confirm('Anda Yakin Ingin Menghapusnya?');" /></a>
						</td>
					</tr>
			<?php
					$no++;
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
