<?php 
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
echo "<hr>";

// Deklarasi / definisi function
function totalvolumeDuakubus($a, $b) {
  $volume_a = pow($a, 3);
  $volume_b = pow($b, 3);
  
  $total = $volume_a + $volume_b;

  return "Jumlah dari volume kubus dengan sisi $a dan kubus senga sisi $b adalah $total";

}

// pemanggilan / eksekusi function
echo totalvolumeDuaKubus(9,4);
echo "<br>";
Echo totalvolumeduakubus(10,20);
echo "<br>";
echo totalvolumeduakubus(5,6);
echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segitiga

function LuasSegiTiga($alas, $tinggi) {
  $luas = 0.5 * $alas * $tinggi;
  return " Luas segi tiga dengan alas $alas dan tinggi $tinggi adalah $luas";
}

echo luasSegitiga(2,4); 
// Luas segi tiga dengan alas 2 dan tinggi 4 adalah 4



?>