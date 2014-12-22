<?php

/**
 * Deposit form.
 *
 * @package    betyolo
 * @subpackage form
 * @author     Nguyen Anh Tuan
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DepositForm extends BaseTransactionForm
{
  public function configure()
  {
    $this->setDefault('type', Transaction::DEPOSIT);

    parent::setup();

    $this->widgetSchema->setNameFormat('deposit[%s]');
  }
}
