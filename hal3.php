<?php
session_start();
include("header.php");
$nama = $_SESSION['nama']; 
$akses = $_SESSION['akses'];
if ($akses!='admin') {
	echo "halaman boleh diakses, hai $nama";
}else{
	header('location: login.php');
}
include("footer.php");
?>