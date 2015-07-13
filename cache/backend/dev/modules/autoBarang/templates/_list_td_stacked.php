<td colspan="8">
  <?php echo __('%%id%% - %%nama_barang%% - %%id_kategori%% - %%stock%% - %%id_kemasan%% - %%id_produsen%% - %%description%% - %%id_harga%%', array('%%id%%' => link_to($barang->getId(), 'barang_edit', $barang), '%%nama_barang%%' => $barang->getNamaBarang(), '%%id_kategori%%' => $barang->getIdKategori(), '%%stock%%' => $barang->getStock(), '%%id_kemasan%%' => $barang->getIdKemasan(), '%%id_produsen%%' => $barang->getIdProdusen(), '%%description%%' => $barang->getDescription(), '%%id_harga%%' => $barang->getIdHarga()), 'messages') ?>
</td>
