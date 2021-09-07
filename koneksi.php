<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "datagt";

$conn = mysql_connect($host, $user, $pass);
if ($conn){
	$buka = mysql_select_db($dbnm);
	if (!$buka){
		die ("Database Tidak Dapat Dibuka");
	}
}else {
		die ("Server MySql Tidak Terhubung");
		}
	
?>