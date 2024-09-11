<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "stok";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$t = "SELECT Jenis_barang, Kuantitas_stock, Lokasi_gudang, Harga, Serial_number, Nama_barang FROM inventory";
$result = $conn->query($t);

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
<h1>Inventory</h1>
<table border="3" class="gup">
    <tr>
        <th>Nama barang</th> 
        <th>Jenis barang</th>
        <th>Kuantitas_stock</th>
        <th>Lokasi_gudang</th>
        <th>Harga</th>
        <th>Serial_number</th>
        <th>Action</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Nama_barang'] . "</td>";
            echo "<td>" . $row['Jenis_barang'] . "</td>";
            echo "<td>" . $row['Kuantitas_stock'] . "</td>";
            echo "<td>" . $row['Lokasi_gudang'] . "</td>";
            echo "<td>" . $row['Harga'] . "</td>";
            echo "<td>" . $row['Serial_number'] . "</td>";
            echo "<td><a href='delete_inventory.php?id=" . $row['Serial_number'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
    }
    ?>
</table>

<a href="tambah_data_inventory.php" class="tom">Tambah Data inventory</a>

</body>
</html>

<?php
include 'footer.php';
$conn->close();
?>
