<?php

/**
 * DetailBarangMasuk filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseDetailBarangMasukFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_barang_masuk' => new sfWidgetFormPropelChoice(array('model' => 'BarangMasuk', 'add_empty' => true)),
      'id_barang'       => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'harga'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_barang_masuk' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'BarangMasuk', 'column' => 'id')),
      'id_barang'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Barang', 'column' => 'id')),
      'harga'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('detail_barang_masuk_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetailBarangMasuk';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'id_barang_masuk' => 'ForeignKey',
      'id_barang'       => 'ForeignKey',
      'harga'           => 'Number',
    );
  }
}
