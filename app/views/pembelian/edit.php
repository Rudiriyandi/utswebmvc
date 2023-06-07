<h2>Edit Pembelian</h2>

<form action="<?php echo URL; ?>/pembelian/update" method="post">
    <table>
    <tr>
            <td>ID BARANG</td>
            <td><input type="text" name="id_barang" value="<?php echo $row['id_barang']; ?>"></td>
        </tr>
        <tr>
            <td>ID SUPPLIER</td>
            <td><input type="text" name="id_supplier" value="<?php echo $row['id_supplier']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA TOTAL</td>
            <td><input type="number" name="harga_total" value="<?php echo $row['harga_total']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>