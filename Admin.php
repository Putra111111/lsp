<?php

$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "stok";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


$t = "SELECT ID, Nama, Kontak, Email FROM admin";
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
<h1>1. Admin</h1>
<table border="3" class="gup">
    <tr>
        <th>ID</th> 
        <th>Nama</th>
        <th>Kontak</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>"; 
            echo "<td>" . $row['Nama'] . "</td>";
            echo "<td>" . $row['Kontak'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td><a href='delete.php?id=" . $row['ID'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
include 'footer.php';
$conn->close();
?>
