<h2>Input Pembelian</h2>

<form action="<?php echo URL; ?>/pembelian/simpan" method="post">
    <table>
    td>ID BARANG</td>
            <td><input type="text" name="id_barang"></td>
        </tr> 
        <tr>
            <td>ID SUPPLIER</td>
            <td><input type="text" name="id_supplier"></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="number" name="jumlah"></td>
        </tr>
        <tr>
            <td>HARGA TOTAL</td>
            <td><input type="number" name="harga_total"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>