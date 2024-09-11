<?php
include 'header.php';
include 'koneksi.php';

$query = "SELECT id_vendor, Nama, Kontak, Nama_barang FROM vendor";
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

<form action="proses_tambah_vendor.php" method="post">

<h2>Tambah data Storage</h2>
    
    <div class="input-grup">
      <label for="Nama">Nama gudang:</label>
      <input type="text" id="Nama" name="Nama"><br><br>
    </div>

    <div class="input-grup">
      <label for="Kontak" class="bet">Kontak:</label>
      <input type="text" id="Kontak" name="Kontak"><br><br>
    </div>

    <div class="input-grup">
      <label for="Nama_barang" class="bet">Nama_barang:</label>
      <input type="text" id="Nama_barang" name="Nama_barang"><br><br>
    </div>
    
    
    <input type="submit" value="Tambah Data" class="button1">
</form>
</div>
</body>
</html>

<?php
$conn->close();
?>
