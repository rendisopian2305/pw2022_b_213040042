<?php 
$mahasiswa = [
    ["nama" =>'jeksen',
    "gambar" => "jeksen.jpg.jpg",
    'NPM'=>'213040065', 
    'email'=>'paisalambari15@gmail.com',
    'prodi'=>"Teknik Informatika"], 

    ["nama"=>'rendi',
    "gambar" => "rendi.jpg.jpg",
    'NPM'=>'213040053',
     'email'=>'Juanaditya@gmail.com',
     'prodi' =>'Teknik Informatika'],

    ["nama"=>'sopian', 
    "gambar" => "sopian.jpg.jpg",
    'NPM'=>'213040063',
    'email'=>'priamitra@gmail.com',
    'prodi'=> 'Teknik Informatika']
    
];
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
</head>

<body>
    <div class="container my-3">
        <h1>Daftar Mahasiswa</h1>
        <a href="#" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Nama</th>
              
                    
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) : ?>
                    <tr class="align-middle">
                        <td><?= $no++; ?></td>
                        <td>
                            <img src="<?= $mhs['gambar']; ?>" class="rounded-circle" width="50px">
                        </td>
                        <td><?= $mhs['nama']; ?></td>
                        
                        <td>
                            <a href="#" class="btn btn-warning">UBAH</a>
                            <a href="#" class="btn btn-danger">HAPUS</a>
                            <a href="kuliah_latihan4.php" class="btn btn-info">DETAIL</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>