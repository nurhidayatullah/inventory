<?php use_helper('I18N', 'Date') ?>
<?php include_partial('barang/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Barang', array(), 'messages') ?></h1>

  <?php include_partial('barang/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('barang/form_header', array('barang' => $barang, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('barang/form', array('barang' => $barang, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('barang/form_footer', array('barang' => $barang, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
