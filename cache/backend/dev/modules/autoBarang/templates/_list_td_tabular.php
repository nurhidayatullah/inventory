<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($barang->getId(), 'barang_edit', $barang) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nama_barang">
  <?php echo $barang->getNamaBarang() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_kategori">
  <?php echo $barang->getIdKategori() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_stock">
  <?php echo $barang->getStock() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_kemasan">
  <?php echo $barang->getIdKemasan() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_produsen">
  <?php echo $barang->getIdProdusen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $barang->getDescription() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_harga">
  <?php echo $barang->getIdHarga() ?>
</td>
