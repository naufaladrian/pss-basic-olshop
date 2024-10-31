<?php
session_start();
include "koneksi.php";
include "uploadFoto.php";
$id=$_POST['tid'];
$nama=$_POST['tnama'];
$hrg=$_POST['thrg'];
$ket=$_POST['tket'];
$jml=$_POST['tjml'];
$pjk=$_POST['tpjk'];
$foto_lama=$_POST['foto_lama'];

$qry=true;
$flagFoto=true;

if(isset($_POST['ubah_foto'])){
    if (upload_foto ($_FILES["foto"])){ 
        $foto=$_FILES["foto"]["name"]; 
        $sql = "update barang set nama='$nama', hrg='$hrg', jml='$jml', keterangan='$ket', foto='$foto', pajak='$pjk' where id='$id'";
    }else{
        $qry=false;
        echo "foto gagal diupload";
    } 
}else{
    $sql = "update barang set nama='$nama', hrg='$hrg', jml='$jml', keterangan='$ket', pajak='$pjk' where id='$id'"; 
    $flagFoto=false;
}
if ($qry==true){
    if ($conn->query($sql) === TRUE) { 
        if(is_file("img/".$foto_lama) && ($flagFoto==true)) {
            unlink("img/".$foto_lama);
        }
        header("location:list-product.php?page=manage"); 
    }else{
        $conn->close();
        $conn->close();
        echo "New records failed";
    }
}
?>