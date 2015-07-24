<?php

/**
 * Barang form.
 *
 * @package    symfony
 * @subpackage form
 * @author     Your name here
 */
class BarangForm extends BaseBarangForm
{
  public function configure()
  {
	  $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nama_barang' => new sfWidgetFormInputText(),
      'id_kategori' => new sfWidgetFormPropelChoice(array('model' => 'Kategori', 'add_empty' => true)),
      'stock'       => new sfWidgetFormInputText(),
      'id_kemasan'  => new sfWidgetFormPropelChoice(array('model' => 'Kemasan', 'add_empty' => true)),
      'id_produsen' => new sfWidgetFormPropelChoice(array('model' => 'Produsen', 'add_empty' => true)),
      'description' => new sfWidgetFormTextarea(),
    ));
  }
}
