<?php
session_start();
include("header.php");
if (isset($_SESSION['pesan'])) {
	echo $_SESSION['pesan'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form action="login.php" method="POST">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" required><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="Password" required><br>
			<input type="submit" name="submit" value="Login">
		</form>
	</body>
</html>
<?php 
$data = array(
			array(
				"iduser" => "1234",
				"username" => "admin",
				"password" => "admin"
			),
			array(
				"iduser" => "1235,",
				"username" => "user",
				"password" => "user"
			)
		);
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$num = 0;
	$data_valid = 0;
	while($num < count($data)){
		if($username == $data[$num]['username'] && $password == $data[$num]['password'] ){
			$_SESSION['username'] = $username;
			$_SESSION['iduser'] = $data[$num]['iduser'];
			$_SESSION['akses'] = 'admin';
			$data_valid = 1;
		}
		$num++;
	}
	if ($data_valid < 1) {
		echo "Login Gagal";
	} else {
		header('location: hal1.php');
	}
}
include("footer.php");
?>
