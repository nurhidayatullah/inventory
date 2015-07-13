<?php

/**
 * Kategori filter form base class.
 *
 * @package    symfony
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseKategoriFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nama_kategori' => new sfWidgetFormFilterInput(),
      'keterangan'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nama_kategori' => new sfValidatorPass(array('required' => false)),
      'keterangan'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('kategori_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Kategori';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'nama_kategori' => 'Text',
      'keterangan'    => 'Text',
    );
  }
}
