<?php
include 'header.php';
include 'koneksi.php';

$query = "SELECT Serial_number, Nama_barang, Jenis_barang, Kuantitas_stock, Lokasi_gudang, Harga FROM inventory";
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

<div class="inventory">

<form action="proses_tambah_inventory.php" method="post">

<h2>Tambah data Storage</h2>
    
    <div class="input-grup">
      <label for="Nama_barang">Nama barang:</label>
      <input type="text" id="Nama_barang" name="Nama_barang"><br><br>
    </div>

    <div class="input-grup">
      <label for="Jenis_barang" class="bet">Jenis_barang:</label>
      <input type="text" id="Jenis_barang" name="Jenis_barang"><br><br>
    </div>

    <div class="input-grup">
      <label for="Kuantitas_stock">Kuantitas_stock:</label>
      <input type="text" id="Kuantitas_stock" name="Kuantitas_stock"><br><br>
    </div>

    <div class="input-grup">
      <label for="Lokasi_gudang" class="bet">Lokasi gudang:</label>
      <input type="text" id="Lokasi_gudang" name="Lokasi_gudang"><br><br>
    </div>

    <div class="input-grup">
      <label for="Harga">Harga:</label>
      <input type="text" id="Harga" name="Harga"><br><br>
    </div>
    
    
    <input type="submit" value="Tambah Data" class="button1">
</form>
</div>
</body>
</html>

<?php
$conn->close();
?>
