<?php 

functions Koneksi() {
$conn = mysqli_connect('localhost', 'root', 'root', 'pw2022_b_043040023') or die('KONEKSI GAGAL!!');
return $scon
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

// Siapkan data $mahasiswa
$rows = [];
while($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


return $con

}

functions tambah ($data) {
$conn = Koneksi();

$npm =$data["npm"];
$nama =$data["nama"];
$email =$data["email"];
$jurusan =$data["jurusan"];
$gambar =$data["gambar"];

$query = "INSERT INTO mahasiswa VALUES (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

return mysqli_affected_rows($conn)

}

functions hapus($id) {
$conn = koneksi();
mysqli_query($conn, "DELETE FORM mahasiswa WHERE id = $id") or die(mysqli_eror($conn));

}