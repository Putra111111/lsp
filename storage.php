<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "stok";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$sql = "SELECT id_storage, Nama_gudang, Lokasi FROM storage";
$result = $conn->query($sql);

include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tabel.css">
</head>
<body>
<h1>Storage</h1>
<table border="3" class="gup">
    <tr>
        <th>ID</th> 
        <th>Nama_gudang</th>
        <th>Lokasi</th>
        <th>Action</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_storage'] . "</td>";
            echo "<td>" . $row['Nama_gudang'] . "</td>";
            echo "<td>" . $row['Lokasi'] . "</td>";
            echo "<td><a href='delete_storage.php?id_storage=" . $row['id_storage'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
    }
    ?>
</table>

<a href="tambah_data_storage.php" class="tom">Tambah Data Storage</a>

</body>
</html>

<?php
include 'footer.php';
$conn->close();
?>
