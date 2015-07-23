<?php

/**
 * LogBarang form base class.
 *
 * @method LogBarang getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLogBarangForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'tanggal'    => new sfWidgetFormDateTime(),
      'id_barang'  => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'in'         => new sfWidgetFormInputText(),
      'out'        => new sfWidgetFormInputText(),
      'saldo'      => new sfWidgetFormInputText(),
      'keterangan' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'tanggal'    => new sfValidatorDateTime(array('required' => false)),
      'id_barang'  => new sfValidatorPropelChoice(array('model' => 'Barang', 'column' => 'id', 'required' => false)),
      'in'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'out'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'saldo'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'keterangan' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('log_barang[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LogBarang';
  }


}
