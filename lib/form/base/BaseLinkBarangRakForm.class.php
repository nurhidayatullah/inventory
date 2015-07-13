<?php

/**
 * LinkBarangRak form base class.
 *
 * @method LinkBarangRak getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLinkBarangRakForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'id_barang' => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'id_rak'    => new sfWidgetFormPropelChoice(array('model' => 'Rak', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'id_barang' => new sfValidatorPropelChoice(array('model' => 'Barang', 'column' => 'id', 'required' => false)),
      'id_rak'    => new sfValidatorPropelChoice(array('model' => 'Rak', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('link_barang_rak[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinkBarangRak';
  }


}
