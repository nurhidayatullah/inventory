<?php

/**
 * Propinsi filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePropinsiFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_propinsi' => new sfWidgetFormFilterInput(),
      'id_negara'     => new sfWidgetFormPropelChoice(array('model' => 'Negara', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nama_propinsi' => new sfValidatorPass(array('required' => false)),
      'id_negara'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Negara', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('propinsi_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Propinsi';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'nama_propinsi' => 'Text',
      'id_negara'     => 'ForeignKey',
    );
  }
}
