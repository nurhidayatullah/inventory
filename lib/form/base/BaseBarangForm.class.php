<?php

/**
 * Barang form base class.
 *
 * @method Barang getObject() Returns the current form's model object
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBarangForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nama_barang' => new sfWidgetFormInputText(),
      'id_kategori' => new sfWidgetFormPropelChoice(array('model' => 'Kategori', 'add_empty' => true)),
      'stock'       => new sfWidgetFormInputText(),
      'id_kemasan'  => new sfWidgetFormPropelChoice(array('model' => 'Kemasan', 'add_empty' => true)),
      'id_produsen' => new sfWidgetFormPropelChoice(array('model' => 'Produsen', 'add_empty' => true)),
      'description' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nama_barang' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'id_kategori' => new sfValidatorPropelChoice(array('model' => 'Kategori', 'column' => 'id', 'required' => false)),
      'stock'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'id_kemasan'  => new sfValidatorPropelChoice(array('model' => 'Kemasan', 'column' => 'id', 'required' => false)),
      'id_produsen' => new sfValidatorPropelChoice(array('model' => 'Produsen', 'column' => 'id', 'required' => false)),
      'description' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('barang[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Barang';
  }


}
