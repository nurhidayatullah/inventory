<?php

/**
 * Customers form base class.
 *
 * @method Customers getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCustomersForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'nama_cust' => new sfWidgetFormInputText(),
      'alamat'    => new sfWidgetFormInputText(),
      'id_kota'   => new sfWidgetFormPropelChoice(array('model' => 'Kota', 'add_empty' => true)),
      'telp'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nama_cust' => new sfValidatorString(array('max_length' => 100)),
      'alamat'    => new sfValidatorString(array('max_length' => 100)),
      'id_kota'   => new sfValidatorPropelChoice(array('model' => 'Kota', 'column' => 'id', 'required' => false)),
      'telp'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('customers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Customers';
  }


}
