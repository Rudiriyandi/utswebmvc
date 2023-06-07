<h2>Daftar Penjualan</h2>

<a href="<?php echo URL; ?>/penjualan/input" class="btn">Input Penjualan</a>

<table>
      <tr>
        <th>ID PENJUALAN</th>
        <th>ID BARANG</th>
        <th>TANGGAL</th>
        <th>JUMLAH</th>
        <th>HARGA TOTAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_penjualan']; ?></td>
                  <td><?php echo $row['id_barang']; ?></td>
                  <td><?php echo $row['tanggal']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['harga_total']; ?></td>
                  <td><a href="<?php echo URL; ?>/penjualan/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/penjualan/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>