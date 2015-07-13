<?php

/**
 * BarangMasuk form base class.
 *
 * @method BarangMasuk getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBarangMasukForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'tanggal'     => new sfWidgetFormDateTime(),
      'id_supplier' => new sfWidgetFormPropelChoice(array('model' => 'Supplier', 'add_empty' => true)),
      'total'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'tanggal'     => new sfValidatorDateTime(array('required' => false)),
      'id_supplier' => new sfValidatorPropelChoice(array('model' => 'Supplier', 'column' => 'id', 'required' => false)),
      'total'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('barang_masuk[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BarangMasuk';
  }


}
