<h2>Daftar Pembelian</h2>

<a href="<?php echo URL; ?>/pembelian/input" class="btn">Input Pembelian</a>

<table>
      <tr>
        <th>ID PEMBELIAN</th>
        <th>ID BARANG</th>
        <th>ID SUPPLIER</th>
        <th>TANGGAL</th>
        <th>JUMLAH</th>
        <th>HARGA TOTAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_pembelian']; ?></td>
                  <td><?php echo $row['id_barang']; ?></td>
                  <td><?php echo $row['id_supplier']; ?></td>
                  <td><?php echo $row['tanggal']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['harga_total']; ?></td>
                  <td><a href="<?php echo URL; ?>/pembelian/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pembelian/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>