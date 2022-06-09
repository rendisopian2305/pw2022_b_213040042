<?php
require 'functions.php'
$id = $_GET["id"];

if (tambah($_POST) > 0){
  echo "<script>
  alret('Data berhasil dihapuskan');
  document, location.href = 'kuliah_latihan1.php';
  </script>";
    }