<?php

/**
 * Harga filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseHargaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nominal'     => new sfWidgetFormFilterInput(),
      'kurs'        => new sfWidgetFormFilterInput(),
      'description' => new sfWidgetFormFilterInput(),
      'id_barang'   => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'active'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nominal'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'kurs'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'id_barang'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Barang', 'column' => 'id')),
      'active'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('harga_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Harga';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nominal'     => 'Number',
      'kurs'        => 'Text',
      'description' => 'Text',
      'id_barang'   => 'ForeignKey',
      'active'      => 'Number',
    );
  }
}
