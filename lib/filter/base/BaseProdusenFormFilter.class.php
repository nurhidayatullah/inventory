<?php

/**
 * Produsen filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseProdusenFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_produsen' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'alamat'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_kota'       => new sfWidgetFormPropelChoice(array('model' => 'Kota', 'add_empty' => true)),
      'telp'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nama_produsen' => new sfValidatorPass(array('required' => false)),
      'alamat'        => new sfValidatorPass(array('required' => false)),
      'id_kota'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Kota', 'column' => 'id')),
      'telp'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('produsen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Produsen';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'nama_produsen' => 'Text',
      'alamat'        => 'Text',
      'id_kota'       => 'ForeignKey',
      'telp'          => 'Text',
    );
  }
}
