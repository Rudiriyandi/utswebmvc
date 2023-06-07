<h2>Daftar Barang</h2>

<a href="<?php echo URL; ?>/barang/input" class="btn">Input Barang</a>

<table>
      <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>STOK</th>
            <th>HARGA JUAL</th>
            <th>HARGA BELI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_barang']; ?></td>
                  <td><?php echo $row['nama_barang']; ?></td>
                  <td><?php echo $row['stok']; ?></td>
                  <td><?php echo $row['harga_jual']; ?></td>
                  <td><?php echo $row['harga_beli']; ?></td>
                  <td><a href="<?php echo URL; ?>/barang/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/barang/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>