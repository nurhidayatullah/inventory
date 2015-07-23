<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo $barang->getId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nama_barang">
  <?php echo $barang->getNamaBarang() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_kategori">
  <?php echo $barang->getKategori() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_stock">
  <?php echo $barang->getStock() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_kemasan">
  <?php echo $barang->getKemasan() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_produsen">
  <?php echo $barang->getProdusen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $barang->getDescription() ?>
</td>
