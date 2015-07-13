<td colspan="4">
  <?php echo __('%%id%% - %%nominal%% - %%kurs%% - %%description%%', array('%%id%%' => link_to($harga->getId(), 'harga_edit', $harga), '%%nominal%%' => $harga->getNominal(), '%%kurs%%' => $harga->getKurs(), '%%description%%' => $harga->getDescription()), 'messages') ?>
</td>
