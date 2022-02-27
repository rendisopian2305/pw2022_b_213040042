<?php 
// pertemuan 2, belajar sintaks PHP

// NILAI
// angka (inteer), tulisan (string), true/false (bolean)
echo 10; // integer
echo '<br>';
echo 'jek'; //string
echo '<br>';
echo false; // boolean null
echo '<hr>';

// VARIABEL
// Tempat menampung NILAI
// awali dengan tanda $, nama nya bebas
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi
$nama_depan = 'marker';
echo $nama_depan;
echo'<hr>';

// string
// '',""
$hari = 'sabtu';
echo $hari;
echo '<br>';
echo 'jekmarker'.  "Hallo, semua";
echo '<br>';
// Escape Character
// \
echo 'jekmarker' . '"Selamat Hari jum\'at"';
echo '<br>';
echo "jekmarker: \"Selamat Hari Jum'at\"";
echo '<br>';
// Interpolasi
// Mencetak langsung isi Variabel
// hanya bisa oleh ""
echo "Hallo, nama saya $nama_depan";
echo '<br>';
echo 'Hallo, nama saya $nama_depan';
echo '<hr>';

// concat / Penggabung string
// .
$nama_depan = 'jek';
$nama_belakang = 'merker';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'jekmarker: "selamat' . " hari jum'at\"";
echo '<hr>';

// OPERATOR
// Aritmatika
// +, -, *, / , % (modula / modulus / sisa bagi)
echo 1 + 1; // Hasil dari 1 + 1 adalah 2;
echo '<br>';
echo '<hr>';
echo (1 + 2) * 3 - 4; // KaTaBaTaKu
echo '<hr>';
echo 10 % 5;
echo '<hr>';
echo 1 + "1" + 1;
echo '<hr>';

// Perbandingan
// <, >, <=, >=, ==, !=
echo 1 < 5; // true (1)
echo '<br>';
echo 1 == 1;

echo '<hr>';

// Identitas / strick comparision
// ===, !==
echo 1 === "1";


echo '<hr>';

// Increment / Decrement
// tambah / kurang 1
// ++, --
$x = 10;
echo ++$x;
echo '<hr>';
echo $x++;
echo '<hr>';

?>