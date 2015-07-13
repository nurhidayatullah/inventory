<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($harga->getId(), 'harga_edit', $harga) ?>
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
