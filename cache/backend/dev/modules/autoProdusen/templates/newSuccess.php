<?php use_helper('I18N', 'Date') ?>
<?php include_partial('produsen/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Produsen', array(), 'messages') ?></h1>

  <?php include_partial('produsen/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('produsen/form_header', array('produsen' => $produsen, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('produsen/form', array('produsen' => $produsen, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('produsen/form_footer', array('produsen' => $produsen, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
