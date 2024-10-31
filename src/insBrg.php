<?php
session_start();
include "koneksi.php";
include "uploadFoto.php";

$nama = $_POST['tnama'];
$hrg = $_POST['thrg'];
$ket = $_POST['tket'];
$jml = $_POST['tjml'];
$pjk = $_POST['tpjk'];
if (upload_foto($_FILES["foto"])) {
    $foto = $_FILES["foto"]["name"];
    $sql = "INSERT into barang (nama, hrg, jml, keterangan, foto, pajak) values ('$nama', '$hrg', '$jml', '$ket', '$foto', '$pjk')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:list-product.php?page=manage");
    } else {
        $conn->close();
        echo "New records failed";
    }
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>