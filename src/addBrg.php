<!-- FORM UNTUK TAMBAH BARANG -->
<h5 class="card-title"> Form Tambah Barang</h5>
<!-- Vertical Form -->
<form class="row g-3" action="insBrg.php" method="post" enctype="multipart/form-data">
    <div class="col-12">
        <label for="tnama" class="form-label">Nama Barang</label> <input type="text" class="form-control" id="tnama"
            name="tnama">
    </div>
    <div class="col-12">
        <label for="thrg" class="form-label">Harga Barang</label> <input type="text" class="form-control" id="thrg"
            name="thrg">
    </div>
    <div class="col-12">
        <div class="col-12">
            <label for="tpjk" class="form-label">Pajak</label> <input type="text" class="form-control" id="tpjk"
                name="tpjk">
        </div>
        <div class="col-12">
            <label for="tjml" class="form-label">Jml Stok</label> <input type="text" class="form-control" id="tjml"
                name="tjml">
        </div>
        <div class="col-12">
            <label for="tket" class="form-label">Keterangan</label> <input type="text" class="form-control" id="tket"
                name="tket">
        </div>
        <div class="col-12">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
</form> <!-- Vertical Form -->