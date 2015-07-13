<?php

/**
 * Rak form base class.
 *
 * @method Rak getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRakForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'kode_rak'   => new sfWidgetFormInputText(),
      'keterangan' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'kode_rak'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'keterangan' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rak[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rak';
  }


}
