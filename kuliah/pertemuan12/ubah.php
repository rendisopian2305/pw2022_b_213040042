<?php
require 'functions.php';

// quiery data mahasiswa berdasarkan id
$id = $_GET["id"];
$m = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol ubah sudah diklik
if (isset($_POST["ubah"])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href='index.php';
            </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <div class="container">
    <h1>Form Ubah Data Mahasiswa</h1>

    <a href="index.php">Kembali ke Daftar Mahasiswa</a>

    <div class="row nt-3">
      <div class="col-8">

        <form action="" method="POST" autocomplete="off">

          <input type="hidden" name="id" value="<?= $m["id"]; ?>">

          <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm" required maxlength="9" minlength="9" style="width: 150px" value="<?= $m["npm"]; ?>">
          </div>

          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $m["nama"]; ?>" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $m["email"]; ?>">
          </div>

          <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $m["jurusan"]; ?>">
          </div>

          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $m["gambar"]; ?>">
          </div>

          <button class="btn btn-primary" type="submit" name="ubah">Ubah Data Mahasiswa</button>

        </form>

      </div>
    </div>

  </div>

  <!-- Optional Javascript; choose one of the two -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdeliver.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0Rn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Seperate Popper and Bootstrap JS -->
  <!-- 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
  -->
</body>

</html>