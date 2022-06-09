<?php
session_start();

if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};

include 'koneksi.php';
date_default_timezone_set("Asia/Bangkok");
$timenow = date("j-F-Y-h:i:s A");

	if(isset($_POST['login']))
	{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);
	$queryuser = mysqli_query($conn,"SELECT * FROM login WHERE email='$email'");
	$cariuser = mysqli_fetch_assoc($queryuser);
		
		if( password_verify($pass, $cariuser['password']) ) {
			$_SESSION['id'] = $cariuser['userid'];
			$_SESSION['role'] = $cariuser['role'];
			$_SESSION['notelp'] = $cariuser['notelp'];
			$_SESSION['name'] = $cariuser['namalengkap'];
			$_SESSION['log'] = "Logged";
			header('location:index.php');
		} else {
			echo 'Username atau password salah';
			header("location:login.php");
		}		
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rhstore" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />

</script>
</head>
	
<body>
	<div class="logo_products">
		
<div id="card">
    <div id="card-content">

	<div id="card-title">
    <div class="login-form">
    <h1>RENDI HELMETS STORE</h1>
	</div>
	</div>

    <div class="login">
	<div class="container">

	<h2>Masuk</h2>

	<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
	<form method="post">
	<div>
	<input class="inpt" type="text" name="email" placeholder="Email" required>
	</div>
	<div>
	<input class="inp" type="password" name="pass" placeholder="Password" required>
	</div>
	<div>
	<input class="btn" type="submit" name="login" value="Masuk">
	</div>
	</form>
	</div>
	<p><a class="link" href="register.php">Belum Punya Akun?</a></p>

							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="js/bootstrap.min.js"></script>


</body>
</html>