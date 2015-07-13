<?php

/**
 * Kota form base class.
 *
 * @method Kota getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseKotaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nama_kota'   => new sfWidgetFormInputText(),
      'id_propinsi' => new sfWidgetFormPropelChoice(array('model' => 'Propinsi', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nama_kota'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_propinsi' => new sfValidatorPropelChoice(array('model' => 'Propinsi', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kota[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kota';
  }


}
