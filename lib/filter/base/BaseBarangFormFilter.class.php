<?php

/**
 * Barang filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseBarangFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_barang' => new sfWidgetFormFilterInput(),
      'id_kategori' => new sfWidgetFormPropelChoice(array('model' => 'Kategori', 'add_empty' => true)),
      'stock'       => new sfWidgetFormFilterInput(),
      'id_kemasan'  => new sfWidgetFormPropelChoice(array('model' => 'Kemasan', 'add_empty' => true)),
      'id_produsen' => new sfWidgetFormPropelChoice(array('model' => 'Produsen', 'add_empty' => true)),
      'description' => new sfWidgetFormFilterInput(),
      'id_harga'    => new sfWidgetFormPropelChoice(array('model' => 'Harga', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nama_barang' => new sfValidatorPass(array('required' => false)),
      'id_kategori' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Kategori', 'column' => 'id')),
      'stock'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_kemasan'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Kemasan', 'column' => 'id')),
      'id_produsen' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Produsen', 'column' => 'id')),
      'description' => new sfValidatorPass(array('required' => false)),
      'id_harga'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Harga', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('barang_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Barang';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nama_barang' => 'Text',
      'id_kategori' => 'ForeignKey',
      'stock'       => 'Number',
      'id_kemasan'  => 'ForeignKey',
      'id_produsen' => 'ForeignKey',
      'description' => 'Text',
      'id_harga'    => 'ForeignKey',
    );
  }
}
