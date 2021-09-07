<?php
include "koneksi.php";
	$id_anggota = $_POST['id_anggota'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jk'];
	$no_tlp = $_POST['no_tlp'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];

	//insert ke tabel
	$query = "INSERT INTO anggota VALUES('$id_anggota','$nama','$tgl_lahir','$jk','$no_tlp','$email','$alamat')";
	$sql = mysql_query($query) or die (mysql_error());
	if ($sql){
		echo "<script>alert('Anda berhasil mendaftar !')</script>";
	} else {
		echo "<script>alert('Anda gagal mendaftar !')</script>";
	}
	header("Location: pendaftaran.php");
?>