<?php

/**
 * LogBarang filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLogBarangFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tanggal'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_barang'  => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'in'         => new sfWidgetFormFilterInput(),
      'out'        => new sfWidgetFormFilterInput(),
      'saldo'      => new sfWidgetFormFilterInput(),
      'keterangan' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tanggal'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_barang'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Barang', 'column' => 'id')),
      'in'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'out'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'saldo'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'keterangan' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('log_barang_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LogBarang';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'tanggal'    => 'Date',
      'id_barang'  => 'ForeignKey',
      'in'         => 'Number',
      'out'        => 'Number',
      'saldo'      => 'Number',
      'keterangan' => 'Text',
    );
  }
}
