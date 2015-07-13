<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $barang->getId() ?></td>
    </tr>
    <tr>
      <th>Nama barang:</th>
      <td><?php echo $barang->getNamaBarang() ?></td>
    </tr>
    <tr>
      <th>Id kategori:</th>
      <td><?php echo $barang->getIdKategori() ?></td>
    </tr>
    <tr>
      <th>Stock:</th>
      <td><?php echo $barang->getStock() ?></td>
    </tr>
    <tr>
      <th>Id kemasan:</th>
      <td><?php echo $barang->getIdKemasan() ?></td>
    </tr>
    <tr>
      <th>Id produsen:</th>
      <td><?php echo $barang->getIdProdusen() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $barang->getDescription() ?></td>
    </tr>
    <tr>
      <th>Id harga:</th>
      <td><?php echo $barang->getIdHarga() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('liststok/edit?id='.$barang->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('liststok/index') ?>">List</a>
