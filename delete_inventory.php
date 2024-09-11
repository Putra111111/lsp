<?php
$servername = "localhost";
$username = "root"; 
$password = "";  
$dbname = "stok";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$Serial_number = $_GET['Serial_number'];


$sql = "DELETE FROM inventory WHERE Serial_number = $Serial_number";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
header("Location: inventory.php");
exit;
?>
