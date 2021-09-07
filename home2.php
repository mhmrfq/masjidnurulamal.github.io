<?php
include "koneksi.php";
	$id_siswa = $_POST['id_siswa'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jk'];
	$status = $_POST['status'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$no_tlp = $_POST['no_tlp'];

	//checkbox
        $data1 = implode(", ", $_POST['checkbox1']);
        $data2 = implode(", ", $_POST['checkbox2']);   
    	
	//insert ke tabel
	$query = "INSERT INTO siswa VALUES('$id_siswa','$nama','$tgl_lahir','$jk','$status','$alamat','$pekerjaan','$no_tlp','$data1','$data2')";
	$sql = mysql_query($query) or die (mysql_error());
	if ($sql){
		echo "<script>alert('Anda berhasil mendaftar !')</script>";
		header("location:pendaftaran2.php");
	} else {
		echo "<script>alert('Anda gagal mendaftar !')</script>";
	}
?>