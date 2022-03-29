<!DOCTYPE html>
<html>
  <head>
    <title>POST</title>
</head>
<body>
  <?php if( isset($_POST["submit"]) ) : ?>
    <h1>Hallo, Selamat Datang <?= $_POST["name"]; ?></h1>
    <?php endif; ?>
    
<form action="latihan4.php" method="post">
  Masukan nama :
  <input type="text" name="name">
  <br>
  <button type="submit" name="submit">Kirim!</button>
</form>

</body>
</html>