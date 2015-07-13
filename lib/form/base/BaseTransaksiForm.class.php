<?php

/**
 * Transaksi form base class.
 *
 * @method Transaksi getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTransaksiForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'tanggal'      => new sfWidgetFormDateTime(),
      'id_customers' => new sfWidgetFormPropelChoice(array('model' => 'Customers', 'add_empty' => true)),
      'total'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'tanggal'      => new sfValidatorDateTime(array('required' => false)),
      'id_customers' => new sfValidatorPropelChoice(array('model' => 'Customers', 'column' => 'id', 'required' => false)),
      'total'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('transaksi[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Transaksi';
  }


}
