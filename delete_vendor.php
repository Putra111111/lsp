<?php
$servername = "localhost";
$username = "root"; 
$password = "";  
$dbname = "stok";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$id_vendor = $_GET['id_vendor'];


$sql = "DELETE FROM vendor WHERE id_vendor = $id_vendor";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
header("Location: vendor.php"); 
exit;
?>
