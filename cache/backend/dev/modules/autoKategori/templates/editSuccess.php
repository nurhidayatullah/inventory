<?php use_helper('I18N', 'Date') ?>
<?php include_partial('kategori/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Kategori', array(), 'messages') ?></h1>

  <?php include_partial('kategori/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('kategori/form_header', array('kategori' => $kategori, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('kategori/form', array('kategori' => $kategori, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('kategori/form_footer', array('kategori' => $kategori, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
