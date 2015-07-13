<?php use_helper('I18N', 'Date') ?>
<?php include_partial('harga/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Harga', array(), 'messages') ?></h1>

  <?php include_partial('harga/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('harga/form_header', array('harga' => $harga, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('harga/form', array('harga' => $harga, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('harga/form_footer', array('harga' => $harga, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
