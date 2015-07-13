<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($kemasan->getId(), 'kemasan_edit', $kemasan) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nama_kemasan">
  <?php echo $kemasan->getNamaKemasan() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $kemasan->getDescription() ?>
</td>
