<td colspan="3">
  <?php echo __('%%id%% - %%nama_kemasan%% - %%description%%', array('%%id%%' => link_to($kemasan->getId(), 'kemasan_edit', $kemasan), '%%nama_kemasan%%' => $kemasan->getNamaKemasan(), '%%description%%' => $kemasan->getDescription()), 'messages') ?>
</td>
