<?php

/**
 * Harga form base class.
 *
 * @method Harga getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseHargaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nominal'     => new sfWidgetFormInputText(),
      'kurs'        => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'id_barang'   => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'active'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nominal'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'kurs'        => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
      'id_barang'   => new sfValidatorPropelChoice(array('model' => 'Barang', 'column' => 'id', 'required' => false)),
      'active'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('harga[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Harga';
  }


}
