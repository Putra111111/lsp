<?php
include 'admin.php';
include 'koneksi.php';

$Nama = $_POST['Nama'];
$Kontak = $_POST['Kontak'];
$Nama_barang = $_POST['Nama_barang'];
$id_vendor = $_POST['id_vendor'];

if ($result->num_rows > 0) {

  $query = "INSERT INTO vendor (Nama, id_vendor, Kontak, Nama_barang) VALUES ( '$Nama', '$id_vendor', '$Kontak', '$Nama_barang')";
  $result = $conn->query($query);

  if ($result) {
    header('Location: vendor.php');
    exit;
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}

$conn->close();
?>