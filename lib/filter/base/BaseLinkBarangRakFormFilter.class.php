<?php

/**
 * LinkBarangRak filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLinkBarangRakFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_barang' => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'id_rak'    => new sfWidgetFormPropelChoice(array('model' => 'Rak', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_barang' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Barang', 'column' => 'id')),
      'id_rak'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Rak', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('link_barang_rak_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinkBarangRak';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'id_barang' => 'ForeignKey',
      'id_rak'    => 'ForeignKey',
    );
  }
}
