<?php

/**
 * DetailBarangMasuk form base class.
 *
 * @method DetailBarangMasuk getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDetailBarangMasukForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'id_barang_masuk' => new sfWidgetFormPropelChoice(array('model' => 'BarangMasuk', 'add_empty' => true)),
      'id_barang'       => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'harga'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_barang_masuk' => new sfValidatorPropelChoice(array('model' => 'BarangMasuk', 'column' => 'id', 'required' => false)),
      'id_barang'       => new sfValidatorPropelChoice(array('model' => 'Barang', 'column' => 'id', 'required' => false)),
      'harga'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('detail_barang_masuk[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetailBarangMasuk';
  }


}
