<?php use_helper('I18N', 'Date') ?>
<?php include_partial('bet/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Bet', array(), 'messages') ?></h1>

  <?php include_partial('bet/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('bet/form_header', array('betyolo_bet' => $betyolo_bet, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('bet/form', array('betyolo_bet' => $betyolo_bet, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('bet/form_footer', array('betyolo_bet' => $betyolo_bet, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
