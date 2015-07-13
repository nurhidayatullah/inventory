<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($kategori->getId(), 'kategori_edit', $kategori) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nama_kategori">
  <?php echo $kategori->getNamaKategori() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_keterangan">
  <?php echo $kategori->getKeterangan() ?>
</td>
