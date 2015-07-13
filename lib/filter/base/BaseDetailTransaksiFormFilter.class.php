<?php

/**
 * DetailTransaksi filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseDetailTransaksiFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_transaksi' => new sfWidgetFormPropelChoice(array('model' => 'Transaksi', 'add_empty' => true)),
      'id_barang'    => new sfWidgetFormPropelChoice(array('model' => 'Barang', 'add_empty' => true)),
      'jumlah'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_transaksi' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Transaksi', 'column' => 'id')),
      'id_barang'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Barang', 'column' => 'id')),
      'jumlah'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('detail_transaksi_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DetailTransaksi';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'id_transaksi' => 'ForeignKey',
      'id_barang'    => 'ForeignKey',
      'jumlah'       => 'Number',
    );
  }
}
