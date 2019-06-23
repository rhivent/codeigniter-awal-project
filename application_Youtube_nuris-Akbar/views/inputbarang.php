<?php echo form_open('barang/input_simpan'); ?>
<table>
    <tr><td>KODE BARANG</td><td><?php echo form_input('kode_barang', '',array('placeholder'=>'kode barang')); ?></td></tr>
    <tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang', '',array('placeholder'=>'nama barang')); ?></td></tr>
    <tr><td>HARGA BARANG</td><td><?php echo form_input('harga_barang', '',array('placeholder'=>'harga barang')); ?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('SUBMIT','SUBMIT DATA');?>
        <?php echo anchor('barang','KEMBALI'); ?></td></tr>
</table>

<?php echo form_close(); ?>