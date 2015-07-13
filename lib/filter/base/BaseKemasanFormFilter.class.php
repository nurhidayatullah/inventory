<?php

/**
 * Kemasan filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseKemasanFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_kemasan' => new sfWidgetFormFilterInput(),
      'description'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nama_kemasan' => new sfValidatorPass(array('required' => false)),
      'description'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kemasan_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kemasan';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'nama_kemasan' => 'Text',
      'description'  => 'Text',
    );
  }
}
