<?php

/**
 * Kemasan form base class.
 *
 * @method Kemasan getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseKemasanForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'nama_kemasan' => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nama_kemasan' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'  => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kemasan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kemasan';
  }


}
