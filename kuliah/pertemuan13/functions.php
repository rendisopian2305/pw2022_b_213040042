<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "", "pw2022_b_213040044") or die("KONEKSI GAGAL!!");

  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  // Siapkan data mahasiswa
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $npm = htmlspecialchars($data["npm"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO mahasiswa VALUES (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"];
  $npm = htmlspecialchars($data["npm"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "UPDATE mahasiswa SET 
              npm = '$npm', 
              nama = '$nama',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function upload()
{
  // siapkan data gambar
  $filename = $_FILES["gambar"]["name"];
  $filetmpname = $_FILES["gambar"]["tmp_name"];
  $filesize = $_FILES["gambar"]["size"];
  $filetype = pathinfo($filename, PATHINFO, EXTENSION);
  $sallowedtype = ["jpg", "jpeg", "png"];

  // cek apakah yang diupload bukan gambar
  if(!in_array($filetype, $sallowedtype)) {
    echo "<script>
    alert('yang anda upload bukan gambar!');
    </script>";
    return false;
  }

  // cek apakah gambar terlalu besar
  if($filesize > 1000000) {
    echo "<script>
    alert('ukuran gambar terlalu besar!');
    </script>";
    return false;
  }

  // proses upload gambar
  $newfilename = uniqid() . $filename;
  move_uploaded_file($filetmpname, 'img/' . $filename);

  return $newfilename;
}
