<?php 
$smartphone = [
  [
    "Merk" => "Oppo",
    "Tipe" => "OPPO A74",
    "Spesifikasi" => "Androin 9 color OS 5.2 RAM 3/32 GB",
    "Harga" => "Rp.2.500.000",
    "Gambar" => "A5S.jpg"
  ],
  [
    "Merk" => "Oppo",
    "Tipe" => "OPPO A74",
    "Spesifikasi" => "Androin 11 color OS 11 RAM 11/128 GB",
    "Harga" => "Rp.3.500.000",
    "Gambar" => "A74.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone</title>
</head>

<body>
    <h1>Smartphone</h1>

    <?php foreach($smartphone as $spn) : ?>
        <ul>
        <li>
        <img src="img/A74.jpg">
      </li>
            <Li>Merk : <?= $spn["Merk"]; ?></li>
            <li>Type : <?= $spn["Tipe"]; ?></li>
            <li>Spek : <?= $spn["Spesifikasi"]; ?></li>
            <li>Harga : <?= $spn["Harga"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>