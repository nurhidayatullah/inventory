<?php

/**
 * Transaksi filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTransaksiFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tanggal'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_customers' => new sfWidgetFormPropelChoice(array('model' => 'Customers', 'add_empty' => true)),
      'total'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tanggal'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'id_customers' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Customers', 'column' => 'id')),
      'total'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('transaksi_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Transaksi';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'tanggal'      => 'Date',
      'id_customers' => 'ForeignKey',
      'total'        => 'Number',
    );
  }
}
