<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
// mencari kode barang dengan nilai paling besar
$hasil = mysql_query("select max(id_siswa) as maxKode FROM siswa");
$data = mysql_fetch_array($hasil);
$id = $data['maxKode'];

// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($id, 4, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "MQNA";
$id_siswa = $char . sprintf("%03s", $noUrut);
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Masjid Nurul Amal - Pendaftaran Markaz Quran</title>

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
        <h2>Markaz Quran</h2>
        <ol class="breadcrumb">
            <li><a href="beranda.html">Beranda</a></li>
            <li><a href="markaz.html">Markaz Quran</a></li>
            <li><a href="pendaftaran2.php" class="active">Pendaftaran</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Form Pendaftaran -->
    <div class="page-wrapper bgr p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2>Formulir Pendaftaran</h2>
            <form action="home2.php" method="post" name="input" enctype="multipart/form-data" >
            <div>
                <label for="input_id_anggota">ID Siswa</label>
                <input type="text" name="id_siswa" readonly="" required="required" autocomplete="off" value="<?php echo $id_siswa ?>">
            </div>           
            <div>
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required="required" maxlength="50" autocomplete="off">
            </div>
            <div>
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" required="required" maxlength="25" autocomplete="off">
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <select name="jk">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div>
                <label>Status</label>
                <select name="status">
                    <option value="M">Menikah</option>
                    <option value="BM">Belum Menikah</option>
                    <option value="D">Duda</option>
                    <option value="J">Janda</option>
                </select>
            </div>
            <div>
                <label>Alamat</label>
                <textarea name="alamat" required="required" autocomplete="off"></textarea>
            </div>
            <div>
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" required="required" autocomplete="off">
            </div>
            <div>
                <label>No. Handphone/WA</label>
                <input type="text" name="no_tlp" required="required" maxlength="12" autocomplete="off">
            </div>
            <div>
                <label>Program MQNA yang dipilih :</label>
            </div>
            <div class="row about_row about_us2_pages">
                <div class="who_we_area col-md-7">
                    <?php
                    $data1 = mysql_query("select * from siswa");
                    while($d = mysql_fetch_array($data1)){
                    ?>
                    <?php $d['checkbox1']; ?>    
                    <?php } ?>
                <div>
                    <input type="checkbox" id="c1" name="checkbox1[]" value="Pra Tahsin (Iqra)">
                    <label for="c1"><span></span>Pra Tahsin (Iqra)</label>
                </div>
                <div>
                    <input type="checkbox" id="c2" name="checkbox1[]" value="Tahsin">
                    <label for="c2"><span></span>Tahsin</label>
                </div>
                <div>
                    <input type="checkbox" id="c3" name="checkbox1[]" value="Bahasa Arab">
                    <label for="c3"><span></span>Bahasa Arab</label>
                </div>
                <div>
                    <input type="checkbox" id="c4" name="checkbox1[]" value="Tahfidz Al-Quran">
                    <label for="c4"><span></span>Tahfidz Al-Quran</label>
                </div>
                </div>
                <div class="col-md-5 our_skill_inner">
                <div>
                    <input type="checkbox" id="c5" name="checkbox1[]" value="Nahwu Shorof">
                    <label for="c5"><span></span>Nahwu Shorof</label>
                </div>
                <div>
                    <input type="checkbox" id="c6" name="checkbox1[]" value="Maqomat">
                    <label for="c6"><span></span>Maqomat</label>
                </div>
                <div>
                    <input type="checkbox" id="c7" name="checkbox1[]" value="Tahsin Bersanad">
                    <label for="c7"><span></span>Tahsin Bersanad</label>
                </div>
                <div>
                    <input type="checkbox" id="c8" name="checkbox1[]" value="Kelas Privat">
                    <label for="c8"><span></span>Kelas Privat</label>
                </div>
                </div>
            </div>
            <div>
                <label>Waktu yang dipilih :</label>
            </div>
            <div class="row about_row about_us2_pages">
                <div class="who_we_area col-md-10">
                    <?php
                    $data2 = mysql_query("select * from siswa");
                    while($d = mysql_fetch_array($data2)){
                    ?>
                    <?php $d['checkbox2']; ?>    
                    <?php } ?>
                <div>
                    <input type="checkbox" id="w1" name="checkbox2[]" value="Sabtu & Ahad Pagi &nbsp 08.00-09.30 &nbsp Tahsin Akhwat">
                    <label for="w1"><span></span>Sabtu & Ahad Pagi &nbsp 08.00-09.30 &nbsp Tahsin Akhwat</label>
                </div>
                <div>
                    <input type="checkbox" id="w2" name="checkbox2[]" value="Sabtu & Ahad Sore &nbsp 16.00-17.30 &nbsp Tahsin Akhwat">
                    <label for="w2"><span></span>Sabtu & Ahad Sore &nbsp 16.00-17.30 &nbsp Tahsin Akhwat</label>
                </div>
                <div>
                    <input type="checkbox" id="w3" name="checkbox2[]" value="Senin & Kamis Pagi &nbsp 08.00-09.30 &nbsp Tahsin Akhwat">
                    <label for="w3"><span></span>Senin & Kamis Pagi &nbsp 08.00-09.30 &nbsp Tahsin Akhwat</label>
                </div>
                <div>
                    <input type="checkbox" id="w4" name="checkbox2[]" value="Selasa & Jumat Malam &nbsp 19.00-20.30 &nbsp Tahsin Akhwat">
                    <label for="w4"><span></span>Selasa & Jumat Malam &nbsp 19.00-20.30 &nbsp Tahsin Akhwat</label>
                </div>
                <div>
                    <input type="checkbox" id="w5" name="checkbox2[]" value="Sabtu & Ahad Pagi &nbsp 09.45-11.20 &nbsp B. Arab Akhwat">
                    <label for="w5"><span></span>Sabtu & Ahad Pagi &nbsp 09.45-11.20 &nbsp B. Arab Akhwat</label>
                </div>
                <div>
                    <input type="checkbox" id="w6" name="checkbox2[]" value="Ahad Pagi &nbsp 08.00-10.00 &nbsp Tahsin Ikhwan">
                    <label for="w6"><span></span>Ahad Pagi &nbsp 08.00-10.00 &nbsp Tahsin Ikhwan</label>
                </div>
                <div>
                    <input type="checkbox" id="w7" name="checkbox2[]" value="Kamis Pagi &nbsp 08.00-10.00 &nbsp Tahsin Ikhwan">
                    <label for="w7"><span></span>Kamis Pagi &nbsp 08.00-10.00 &nbsp Tahsin Ikhwan</label>
                </div>
                <div>
                    <input type="checkbox" id="w8" name="checkbox2[]" value="Senin & Kamis Malam &nbsp 18.30-20.30 &nbsp Tahsin Ikhwan">
                    <label for="w8"><span></span>Senin & Kamis Malam &nbsp 18.30-20.30 &nbsp Tahsin Ikhwan</label>
                </div>
                <div>
                    <input type="checkbox" id="w9" name="checkbox2[]" value="Rabu Malam &nbsp 19.00-20.30 &nbsp B. Arab Ikhwan">
                    <label for="w9"><span></span>Rabu Malam &nbsp 19.00-20.30 &nbsp B. Arab Ikhwan</label>
                </div>
                <div>
                    <input type="checkbox" id="w10" name="checkbox2[]" value="Ahad Pagi &nbsp 09.40-11.30 &nbsp B. Arab Ikhwan">
                    <label for="w10"><span></span>Ahad Pagi &nbsp 09.40-11.30 &nbsp B. Arab Ikhwan</label>
                </div>
                </div>
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
                    <h2>MEDSOS Markaz Quran</h2>
                    <p>Kami menyediakan medsos untuk terus update kegiatan-kegiatan di Markaz Quran</p>
                    <ul class="socail_icon">
                        <li><a href="https://www.facebook.com/nurul.amal.7165" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/markazqurannurulamal/?hl=id" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>KONTAK MASJID</h2>
                    <address>
                        <p>Silahkan hubungi kontak dibawah ini, bila Anda ingin informasi lebih lanjut</p>
                        <ul class="my_address">
                            <li><a><i class="fa fa-phone" aria-hidden="true"></i>+6281281414648</a></li>
                            <li><a><i class="fa fa-envelope" aria-hidden="true"></i>+6281281414648</a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2019 All rights reserved. Designed by <a href="https://www.instagram.com/mhm_rfq/?hl=id" target="blank"> Muhamad Nurafiq</a>
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