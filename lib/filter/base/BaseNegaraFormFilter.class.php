<?php

/**
 * Negara filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseNegaraFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_negara' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nama_negara' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('negara_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Negara';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nama_negara' => 'Text',
    );
  }
}
