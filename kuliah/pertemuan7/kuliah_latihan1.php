<?php 
// SUPERGLOBALS
// Variabel bawaan php yang bisa diakses dimanapun 
// Bentuknya array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => "Rendi", "email" => "rendisopian99@gmail.com"];
// $_GET["nama"] = "Rendi";
// $_GET["email"] = "rendisopian99@gmail.com";

// var_dump($_GET);

?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
  <li>
    <a href="kuliah_latihan2.php?nama=Rendi& npm=213040042& email=rendisopian99@gmail.com">Rendi</a>
</li>
<li>
    <a href="kuliah_latihan2.php?nama=Sopian& npm=213040056& email=sopian22@gmail.com">Sopian</a>
</li>
<li>
    <a href="kuliah_latihan2.php?nama=Jeksen& npm=213040041& email=jeksen23@gmail.com">Jeksen</a>
</li>
</ul> 