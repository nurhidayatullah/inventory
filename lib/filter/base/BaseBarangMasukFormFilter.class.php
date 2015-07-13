<?php

/**
 * BarangMasuk filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseBarangMasukFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tanggal'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_supplier' => new sfWidgetFormPropelChoice(array('model' => 'Supplier', 'add_empty' => true)),
      'total'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tanggal'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_supplier' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Supplier', 'column' => 'id')),
      'total'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('barang_masuk_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BarangMasuk';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'tanggal'     => 'Date',
      'id_supplier' => 'ForeignKey',
      'total'       => 'Number',
    );
  }
}
