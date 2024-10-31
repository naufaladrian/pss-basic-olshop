<?php 
$sql = "SELECT * from barang ORDER BY id";
$hasil=$conn->query($sql);
?>
<h5 class="card-title">Management Product</h5> <p><a href="list-product.php?page=addBrg">Tambah Data</a></p>
<!-- Table with stripped rows -->
<table class="table datatable">
<thead>
<tr>
    <th scope="col">#</th>
    <th scope="col">Nama</th> 
    <th scope="col">Kuantitas</th>
    <th scope="col">Harga</th> 
    <th scope="col">Foto</th> 
    <th scope="col">Deskripsi</th>
    <th scope="col">Pajak</th>
    <th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no=1;
if ($hasil->num_rows>0) {
    while ($row=$hasil->fetch_assoc()){ 
        ?>
        <tr>
        <th scope="row"><?php echo $no++?></th>
        <td><?php echo $row["nama"]?></td> 
        <td><?php echo $row["jml"]?></td>
        <td><?php echo $row["hrg"]?></td>
        <td><img src="img/<?php echo $row["foto"]?>" style="width:100px;height:100px;"></img></td> 
        <td><?php echo $row["keterangan"]?></td>
        <td><?php echo $row["pajak"]?>%</td>
        <td>
            <a href="list-product.php?page=editBrg&id=<?php echo $row["id"]?>">Edit</a> 
            <a href="delBrg.php?id=<?php echo $row["id"]?>">Hapus</a>
        </td>
        </tr>
<?php
} 
}else{
    ?> 
    <tr><td colspan="7"></td></tr>
    <?php
}
?>
</tbody>
</table> <!-- End Table with stripped rows -->
<?php $conn->close();
?>