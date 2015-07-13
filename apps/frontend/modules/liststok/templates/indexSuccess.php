<h1>Barangs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nama barang</th>
      <th>Id kategori</th>
      <th>Stock</th>
      <th>Id kemasan</th>
      <th>Id produsen</th>
      <th>Description</th>
      <th>Id harga</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($barangs as $barang): ?>
    <tr>
      <td><a href="<?php echo url_for('liststok/show?id='.$barang->getId()) ?>"><?php echo $barang->getId() ?></a></td>
      <td><?php echo $barang->getNamaBarang() ?></td>
      <td><?php echo $barang->getIdKategori() ?></td>
      <td><?php echo $barang->getStock() ?></td>
      <td><?php echo $barang->getIdKemasan() ?></td>
      <td><?php echo $barang->getIdProdusen() ?></td>
      <td><?php echo $barang->getDescription() ?></td>
      <td><?php echo $barang->getIdHarga() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('liststok/new') ?>">New</a>
