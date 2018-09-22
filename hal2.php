<?php
session_start();
include("header.php");
$nama = $_SESSION['nama'];
$akses = $_SESSION ['akses'];
$iduser = $_SESSION["iduser"];
//print_t($_SESSION);
if ($akses=='admin') {
	echo "halaman boleh diakses, hai $nama";
	if(isset($iduser)){
		echo "id user : " . $iduser;
	} else {
		echo "id user tidak ada";
	}
}else{
	header('location: form.html');
}
include("footer.php");
?>