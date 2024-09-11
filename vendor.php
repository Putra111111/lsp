<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "stok";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$sql = "SELECT id_vendor, Nama, Kontak, Nama_barang FROM vendor";
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
<h1>Vendor</h1>
<table border="3" class="gup">
    <tr>
        <th>ID</th> 
        <th>Nama</th>
        <th>Kontak</th>
        <th>Nama barang</th>
        <th>Action</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_vendor'] . "</td>";
            echo "<td>" . $row['Nama'] . "</td>";
            echo "<td>" . $row['Kontak'] . "</td>";
            echo "<td>" . $row['Nama_barang'] . "</td>";
            echo "<td><a href='delete_vendor.php?id_vendor=" . $row['id_vendor'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
    }
    ?>
</table>

<a href="tambah_data_vendor.php" class="tom">Tambah Data Vendor</a>

</body>
</html>

<?php
include 'footer.php';
$conn->close();
?>
