<td colspan="5">
  <?php echo __('%%id%% - %%nama_produsen%% - %%alamat%% - %%id_kota%% - %%telp%%', array('%%id%%' => link_to($produsen->getId(), 'produsen_edit', $produsen), '%%nama_produsen%%' => $produsen->getNamaProdusen(), '%%alamat%%' => $produsen->getAlamat(), '%%id_kota%%' => $produsen->getIdKota(), '%%telp%%' => $produsen->getTelp()), 'messages') ?>
</td>
