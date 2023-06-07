<h2>Daftar Supplier</h2>

<a href="<?php echo URL; ?>/supplier/input" class="btn">Input Supplier</a>

<table>
      <tr>
        <th>ID</th>
        <th>NAMA SUPPLIER</th>
        <th>ALAMAT</th>
        <th>NOMOR TELPON</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['id_supplier']; ?></td>
                  <td><?php echo $row['nama_supplier']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['no_telp']; ?></td>
                  <td><a href="<?php echo URL; ?>/supplier/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/supplier/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>