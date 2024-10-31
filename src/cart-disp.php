<h5 class="card-title">Cart</h5>
<p> 
    <?php
if (!empty($_SESSION['cart']["arrCart"])){
    ?>
    <a href="cart-remove.php">Kosongkan Cart</a> | <a href="list-product.php">Kembali Belanja</a> 
    <?php
}
?>
</p>
<!-- Table with stripped rows --> <table class="table datatable">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">Jumlah</th>
<th scope="col">Harga</th>
<th scope="col">Pajak %</th>
<th scope="col">Harga Setelah Pajak</th>
</tr>
</thead>
<tbody>
<?php
  $qty=0;
  $prc=0;
  $disp_prc=0;
  $disp_qty=0;
  $pajak=0;
if (!empty($_SESSION['cart']["arrCart"])){ 
    $max=sizeof($_SESSION['cart']['arrCart']);
    $no=1;
  
    for ($i=0;$i<$max; $i++){ 
        echo '<tr><th scope="row">'.$no++. '</th>';
        foreach ($_SESSION['cart']['arrCart'][$i] as $key => $val) { 
            echo "<td>".$val."</td>";
            if ($key=="jml") {
                $qty=0;
                $qty+=$val;
                $disp_qty+=$qty;
            }else if($key=="hrg"){
                $prc=0;
                $prc+=$val*$qty;
            }else if($key=="pjk"){
                $pajak=0;
                $pajak=((($val+100)*$prc)/100);
                $disp_prc+=$pajak;
            }
        } 
        echo "</tr>";
    }
}
    echo "<tr>
    <th scope='col'></th>
    <th scope='col'>Total Barang</th>
    <td scope='col'>".$disp_qty."</td>
    <th scope='col'>Total Harga</th>
    <th scope='col'></th>
    <td scope='col'>".$disp_prc."</td>
    </tr>"
?>

</tbody>
</table> <!-- End Table with stripped rows -->