<?php 
// $mahasiswa = [
  // ["Rendi sopian", "213040042", "rendisopian99@gmail.com", "Teknik informtika"],
 // ["jeksen", "213040047", "jeksen23@gmail.com", "Teknik pangan"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
  </ul> 
  <?php endforeach; ?>


  </body>
  </html>