<?php 
function salam($waktu = "Datang", $nama = "Admin") {
  return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Latihan Fubction</title>
  </head>
  <body>
    <h1><?= salam("pagi", "Rendi"); ?></h1>
  </body>
</html>