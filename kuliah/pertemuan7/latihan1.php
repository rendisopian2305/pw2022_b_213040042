<?php 
// $_GET
$mahasiswa = [
  [
    "nama" => "Rendi sopian",
    "nrp" => "213040042",
    "email" => "rendisopian99@mail.com",
    "jurusan" => "Teknik informatika",
    "gambar" => "rendi.jpg.jpg"
  ],
  [
    "nama" => "jeksen",
    "nrp" => "213040046",
    "email" => "jeksen23@mail.com",
    "jurusan" => "Teknik pangan",
    "gambar" => "jeksen.jpg.jpg"
    
  ]
  ];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>GET</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
  <?php foreach( $mahasiswa as $mhs) : ?>
    <li>
      <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>