<?php
session_start();
if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};
include 'koneksi.php';

if(isset($_POST['adduser']))
	{
		$nama = $_POST['nama'];
		$telp = $_POST['telp'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); 
			  
		$tambahuser = mysqli_query($conn,"insert into login (namalengkap, email, password, notelp, alamat) 
		values('$nama','$email','$pass','$telp','$alamat')");
		if ($tambahuser){
		echo " <div class='alert alert-success'>
			Berhasil mendaftar, silakan masuk.
		  </div>
		<meta http-equiv='refresh' content='1; url= login.php'/>  ";
		} else { echo "<div class='alert alert-warning'>
			Gagal mendaftar, silakan coba lagi.
		  </div>
		 <meta http-equiv='refresh' content='1; url= registered.php'/> ";
		}
		
	};

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rhstore" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />

</script>
</head>
	
<body>

<div id="card">
    <div id="card-content">

	<div id="card-title">
    <div class="login-form">
	</div>
	</div>

    <div class="login">
	<div class="container">


<div class="register">
		<div class="container">
			<h2>Daftar Disini</h2>
			<div class="login-form-grids">
				<form method="post">
	<div>
	<input class="inp" type="text" name="nama" placeholder="Nama Lengkap" required>
	</div>
	<div>
	<input class="inp" type="text" name="telp" placeholder="Nomor Telepon" required maxlength="13">
	</div>
	<div>
	<input class="inp" type="text" name="alamat" placeholder="Alamat Lengkap" required>
	</div>
	<div>
	<input class="inp" type="email" name="email" placeholder="Email" required="@">
	</div>
	<div>
	<input class="inp" type="password" name="pass" placeholder="Password" required>
	</div>

					<input class="btn" type="submit" name="adduser" value="Daftar">
				
				</form>
			</div>
			<div class="register-home">
				<p>
				<a class="link"href="login.php">Sudah Punya Akun?</a></p>
			</div>
		</div>
	</div>


<script src="js/bootstrap.min.js"></script>


</body>
</html>