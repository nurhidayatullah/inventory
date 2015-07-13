<?php

/**
 * Rak filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRakFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'kode_rak'   => new sfWidgetFormFilterInput(),
      'keterangan' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'kode_rak'   => new sfValidatorPass(array('required' => false)),
      'keterangan' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rak_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rak';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'kode_rak'   => 'Text',
      'keterangan' => 'Text',
    );
  }
}
