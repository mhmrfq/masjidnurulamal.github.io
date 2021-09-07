<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
// mencari kode barang dengan nilai paling besar
$hasil = mysql_query("select max(id_anggota) as maxKode FROM anggota");
$data = mysql_fetch_array($hasil);
$id = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($id, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "AGT";
$id_anggota = $char . sprintf("%03s", $noUrut);
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Masjid Nurul Amal - Pendaftaran Organisasi</title>

    <!-- Favicon -->
        <link href="images/logo-masjid.png" rel="icon">
        <!-- https://pixlr.com/editor/ > untuk mengedit foto -->
    <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
        <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	   <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Camera Slider -->
        <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	   <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	   <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

</head>
<body>

	   <!-- Header_Area -->
    <header class="all_header navbar-fixed-top">
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- Navigation Group -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>
            </div>

    <!-- Navigation -->
    <div class="col-md-10 p0">
    <div class="collapse navbar-collapse" id="min_navbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="beranda.html">Beranda</a>
        </li>
        <li>
          <a href="kajian.html">Kajian</a>
        </li>
        <li class="dropdown submenu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kegiatan</a>
              <ul class="dropdown-menu other_dropdwn">
                <li><a href="organisasi.html">Organisasi Iramana</a></li>
                <li><a href="markaz.html">Markaz Quran</a></li>
              </ul>
        <li><a href="blog12.html">Jadwal Kajian</a></li>
        <li><a href="infaq.html">Infaq</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse --> 
    </div>   
    </div><!-- /.container-fluid -->
</nav>
</header>
    
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Iramana</h2>
        <h3>(Ikatan Remaja Masjid Nurul)</h3>
        <ol class="breadcrumb">
            <li><a href="beranda.html">Beranda</a></li>
            <li><a href="organisasi.html">Iramana</a></li>
            <li><a href="pendaftaran.php" class="active">Pendaftaran</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Form Pendaftaran -->
    <div class="page-wrapper bgr p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2>Formulir Pendaftaran</h2>
            <form action="home.php" method="post" name="input" enctype="multipart/form-data" >
            <div>
                <label for="input_id_anggota">ID Anggota</label>
                <input type="text" name="id_anggota" readonly="" required="required" autocomplete="off" value="<?php echo $id_anggota ?>">
            </div>
            <div>
                <label for="input_nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama" required="required" maxlength="50" autocomplete="off">
            </div>
            <div>
                <label for="input_tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" required="required" maxlength="25" autocomplete="off">
            </div>
            <div>
                <label for="input_jenis_kelamin">Jenis Kelamin</label>
                <select name="jk">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="input_no">No. Telephone/ Hp</label>
                <input type="text" name="no_tlp" required="required" maxlength="12" autocomplete="off">
            </div>
            <div>
                <label for="input_email">Email</label>
                <input type="text" name="email" required="required" maxlength="100" autocomplete="off">
            </div>
            <div>
                <label for="input_alasan">Alamat</label>
                <textarea name="alamat" required="required" autocomplete="off"></textarea>
            </div>
           <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
            </form>
                </div>
                </div>
            </div>
        </div>
    <!-- End Form Pendaftaran -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>MEDSOS IRAMANA</h2>
                    <p>Kami memiliki media sosial.</p>
                    <p>Silahkan cek IG kita, disana ada berbagai update terkait kajian Masjid Nurul Amal. </p>
                    <ul class="socail_icon">
                        <li><a href="https://www.instagram.com/iramana.id/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>KONTAK MASJID</h2>
                    <address>
                        <p>Silahkan hubungi kontak dibawah ini, bila Anda ingin informasi lebih lanjut</p>
                        <ul class="my_address">
                            <li><a><i class="fa fa-phone" aria-hidden="true"></i>+6281259144476</a></li>
                            <li><a><i class="fa fa-envelope" aria-hidden="true"></i>+6281282109190</a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2019 All rights reserved. Designed by <a href="https://www.instagram.com/mhm_rfq/?hl=id" target="blank"> Masjid Nurul Amal</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>

</body>
</html>