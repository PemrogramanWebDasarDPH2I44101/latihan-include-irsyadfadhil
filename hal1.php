<?php
session_start();
include("header.php");
$_SESSION['pesan'] = null;
if (!isset($_SESSION['username'])) {
	$_SESSION['pesan'] = "Dilarang Mengakses";
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br>
<br>
<a href="hal2.php">Pindah ke Hal 2</a>
<br>
<br>
<a href="hal3.php">Pindah Hal 3</a>
</body>
</html>
<?php  
include("footer.php");
?>