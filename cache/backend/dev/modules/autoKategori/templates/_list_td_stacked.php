<td colspan="3">
  <?php echo __('%%id%% - %%nama_kategori%% - %%keterangan%%', array('%%id%%' => link_to($kategori->getId(), 'kategori_edit', $kategori), '%%nama_kategori%%' => $kategori->getNamaKategori(), '%%keterangan%%' => $kategori->getKeterangan()), 'messages') ?>
</td>
