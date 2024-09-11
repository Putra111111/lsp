<?php
include 'header.php';
include 'koneksi.php';

$query = "SELECT id_storage, Nama_gudang, Lokasi FROM storage";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>

<div class="login-container">

<form action="proses_tambah_storage.php" method="post">

<h2>Tambah data Storage</h2>
    
    <div class="input-grup">
      <label for="Nama_gudang">Nama gudang:</label>
      <input type="text" id="Nama_gudang" name="Nama_gudang"><br><br>
    </div>

    <div class="input-grup">
      <label for="Lokasi" class="bet">Lokasi:</label>
      <input type="text" id="Lokasi" name="Lokasi"><br><br>
    </div>
    
    
    <input type="submit" value="Tambah Data" class="button1">
</form>
</div>
</body>
</html>

<?php
$conn->close();
?>
