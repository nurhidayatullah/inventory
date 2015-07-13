<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($produsen->getId(), 'produsen_edit', $produsen) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nama_produsen">
  <?php echo $produsen->getNamaProdusen() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_alamat">
  <?php echo $produsen->getAlamat() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_kota">
  <?php echo $produsen->getIdKota() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telp">
  <?php echo $produsen->getTelp() ?>
</td>
