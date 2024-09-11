<?php
$servername = "localhost";
$username = "root"; 
$password = "";  
$dbname = "stok";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$id_storage = $_GET['id_storage'];


$sql = "DELETE FROM storage WHERE id_storage = $id_storage";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
header("Location: storage.php");
exit;
?>
