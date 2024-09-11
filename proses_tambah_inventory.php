<?php
include 'admin.php';
include 'koneksi.php';

$Nama_barang = $_POST['Nama_barang'];
$Jenis_barang = $_POST['Jenis_barang'];
$Kuantitas_stock = $_POST['Kuantitas_stock'];
$Lokasi_gudang = $_POST['Lokasi_gudang'];
$Harga = $_POST['Harga'];
$Serial_number = $_POST['Serial_number'];

if ($result->num_rows > 0) {

  $query = "INSERT INTO inventory (Nama_barang, Jenis_barang, Kuantitas_stock, Lokasi_gudang, Harga, Serial_number) VALUES ( '$Nama_barang', '$Jenis_barang', '$Kuantitas_stock', '$Lokasi_gudang','$Harga','$Serial_number')";
  $result = $conn->query($query);

  if ($result) {
    header('Location: inventory.php');
    exit;
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}

$conn->close();
?>