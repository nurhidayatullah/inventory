<?php

/**
 * Kota filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseKotaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_kota'   => new sfWidgetFormFilterInput(),
      'id_propinsi' => new sfWidgetFormPropelChoice(array('model' => 'Propinsi', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nama_kota'   => new sfValidatorPass(array('required' => false)),
      'id_propinsi' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Propinsi', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('kota_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kota';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nama_kota'   => 'Text',
      'id_propinsi' => 'ForeignKey',
    );
  }
}
