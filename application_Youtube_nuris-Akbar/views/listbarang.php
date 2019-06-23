<?php echo $judul;?><br>
<?php echo anchor('barang/input','INPUT DATA BARANG'); ?>
<hr>

<table border="1">
    <tr><th>KODE BARANG</th><th>NAMA BARANG</th><th>HARGA</th><th colsapan="2"></th></tr>
    <?php
    foreach($barang as $b){
        echo "<tr>
            <td>$b->kode_barang</td>
            <td>$b->nama_barang</td>
            <td>$b->harga</td>
            <td>".anchor('barang/edit/'.$b->kode_barang,'EDIT')."</td>
            <td>".anchor('barang/delete/'.$b->kode_barang,'DELETE')."</td>
            </tr>";
    }
    ?>
</table>