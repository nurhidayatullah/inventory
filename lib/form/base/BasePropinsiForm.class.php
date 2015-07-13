<?php

/**
 * Propinsi form base class.
 *
 * @method Propinsi getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePropinsiForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nama_propinsi' => new sfWidgetFormInputText(),
      'id_negara'     => new sfWidgetFormPropelChoice(array('model' => 'Negara', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nama_propinsi' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_negara'     => new sfValidatorPropelChoice(array('model' => 'Negara', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('propinsi[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Propinsi';
  }


}
