<?php
session_start();
include "koneksi.php";
$id = $_GET['id'];
$sql = "SELECT foto from barang where id='$id'";
$hasil = $conn->query($sql);
while ($row = $hasil->fetch_assoc()) {
    $foto = $row['foto'];
}

$sql = "delete from barang where id='$id'";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("location:list-product.php?page=manage");
} else {
    $conn->close();
    echo "New records failed";
}
?>