<?php
include 'admin.php';
include 'koneksi.php';

$Nama_gudang = $_POST['Nama_gudang'];
$Lokasi = $_POST['Lokasi'];
$id_storage = $_POST['id_storage'];

if ($result->num_rows > 0) {

  $query = "INSERT INTO storage (Nama_gudang, id_storage, Lokasi) VALUES ( '$Nama_gudang', '$id_storage', '$Lokasi')";
  $result = $conn->query($query);

  if ($result) {
    header('Location: storage.php');
    exit;
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}

$conn->close();
?>