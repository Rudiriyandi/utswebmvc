<h2>Edit Supplier</h2>

<form action="<?php echo URL; ?>/barang/update" method="post">
    <table>
        <tr>
            <td>NAMA SUPPLIER</td>
            <td><input type="text" name="nama_supplier" value="<?php echo $row['nama_supplier']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>NOMOR TELEPON</td>
            <td><input type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>"></td>
        </tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>