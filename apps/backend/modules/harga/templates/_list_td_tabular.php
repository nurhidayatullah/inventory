<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo $harga->getId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nominal">
  <?php echo $harga->getNominal() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_kurs">
  <?php echo $harga->getKurs() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $harga->getDescription() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_id_barang">
  <?php echo $harga->getBarang() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_active">
  <?php echo $harga->getActive() ?>
</td>
