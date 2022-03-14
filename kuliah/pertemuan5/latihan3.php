<?php 
$mahasiswa = [
  ["Rendi Sopian", "213040042", "Teknik Informatika", "rendisopian99@gmail.com"],
  ["Jeksen", "213040022", "Teknik Pangan", "jekmarker39@gmail.com"],
  ["Haikel", "213040012", "Teknik Industri", "Haikelrival22@gmail.com"]
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
  <li>Nama : <?= $mhs[0]; ?></li>
  <li>NRP : <?= $mhs[1]; ?></li>
  <li>Jurusan : <?= $mhs[2]; ?></li>
  <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>



</body>
</html>