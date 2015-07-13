<?php

/**
 * Kategori form base class.
 *
 * @method Kategori getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseKategoriForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'nama_kategori' => new sfWidgetFormInputText(),
      'keterangan'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nama_kategori' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'keterangan'    => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kategori[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kategori';
  }


}
