<?php use_helper('I18N', 'Date') ?>
<?php include_partial('kemasan/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Kemasan', array(), 'messages') ?></h1>

  <?php include_partial('kemasan/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('kemasan/form_header', array('kemasan' => $kemasan, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('kemasan/form', array('kemasan' => $kemasan, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('kemasan/form_footer', array('kemasan' => $kemasan, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
