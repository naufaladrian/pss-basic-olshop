<?php
$id=$_GET['id'];
$sql="select * from barang where id='$id'";
$hasil=$conn->query($sql);
while ($row=$hasil->fetch_assoc()){
    $nama=$row['nama'];
    $hrg=$row['hrg'];
    $jml=$row['jml'];
    $keterangan =$row['keterangan']; 
    $foto=$row['foto'];
    $pjk=$row['pajak'];
}
?> <h5 class="card-title">Form Edit Barang</h5>
<!-- Vertical Form -->
<form class="row g-3" action="updBrg.php" method="post" enctype="multipart/form-data"> 
    <div class="col-12"> 
        <label for="inputtid" class="form-label">ID</label>
        <input type="text" class="form-control" id="tid" name="tid" value="<?= $id; ?>" readonly>
    </div>
    <div class="col-12">
        <label for="tnama" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="tnama" name="tnama" value="<?= $nama; ?>" >
    </div> 
    <div class="col-12">
        <label for="thrg" class="form-label">Harga Barang</label> 
        <input type="text" class="form-control" id="thrg" name="thrg" value="<?= $hrg; ?>">
    </div>
    <div class="col-12">
        <label for="tpjk" class="form-label">Pajak</label> 
        <input type="text" class="form-control" id="tpjk" name="tpjk" value="<?= $pjk; ?>"> 
    </div>
    <div class="col-12"> 
    <div class="col-12">
        <label for="tjml" class="form-label">Jml Stok</label>
        <input type="text" class="form-control" id="tjml" name="tjml" value="<?= $jml; ?>"> 
    </div>
    <div class="col-12">
        <label for="tket" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="tket" name="tket" value="<?= $keterangan; ?>"> 
    </div>
    <div class="col-12">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto">
        <input type='hidden' name='foto_lama' value="<?= $foto; ?>"> 
        <img src="img/<?php echo $foto; ?>" width="150px" height="120px" /></br>
    </div> 
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="ubah_foto" name="ubah_foto">
            <label class="form-check-label" for "ubah_foto"> Ceklis jika ingin mengubah foto</label> 
        </div>
    </div>
    <div class="text-center">
        <input type="submit" class="btn btn-primary" value="Update">
    </div> 
</form> <!-- Vertical Form -->