<?php

/**
 * DetailTransaksi form base class.
 *
 * @method DetailTransaksi getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDetailTransaksiForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'id_transaksi' => new sfWidgetFormPropelChoice(array('model' => 'Transaksi', 'add_empty' => true)),
      'id_barang'    => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'jumlah'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_transaksi' => new sfValidatorPropelChoice(array('model' => 'Transaksi', 'column' => 'id', 'required' => false)),
      'id_barang'    => new sfValidatorPropelChoice(array('model' => 'Barang', 'column' => 'id', 'required' => false)),
      'jumlah'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('detail_transaksi[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetailTransaksi';
  }


}
