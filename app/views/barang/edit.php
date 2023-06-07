<h2>Edit barang</h2>

<form action="<?php echo URL; ?>/barang/update" method="post">
    <table>
    <tr>
            <td>NAMA BARANG</td>
            <td><input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>"></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td><input type="text" name="stok" value="<?php echo $row['stok']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA BELI</td>
            <td><input type="text" name="harga_beli" value="<?php echo $row['harga_beli']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA JUAL</td>
            <td><input type="text" name="harga_jual" value="<?php echo $row['harga_jual']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>