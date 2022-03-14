<?php 
// Array
// Aray adalah variabel yang dapat lebih dari satu nilai

$hari1 = "Senin";
$hari2 = "Selasa";
$hari7 = "minggu";

$Bulan1 = "jamuari";
$Bulan12 = "Desember";

$Mahasiswa = "Rendi";

// membuat ARRAY
$hari = ["senin", "Selasa", "Rabu", "Kamis"]; // cara baru
$bulan = array("jamuari", "Febuary", "Maret"); // cara lama
$myArray = [100, "Rendi", true];

// Menampilkan Array
// menampilkan 1 elemen menggunakan indek, dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Menampilkan semua isi array sekaligus
// Var_dump() atau print_r()
// khusu untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak semua isi array menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
echo $hari[$i];
echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $b) {
echo $b;
echo "<br>";
}
echo "<hr>";

// Memanipulasi Array
// Menambahkan elemen di akhir array
$hari[] = "jum'at";
$hari[] = "Sabtu";
var_dump($hari);


?>