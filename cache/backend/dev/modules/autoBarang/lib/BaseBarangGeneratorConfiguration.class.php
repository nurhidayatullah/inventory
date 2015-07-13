<?php

/**
 * barang module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage barang
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseBarangGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%nama_barang%% - %%id_kategori%% - %%stock%% - %%id_kemasan%% - %%id_produsen%% - %%description%% - %%id_harga%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Barang List';
  }

  public function getEditTitle()
  {
    return 'Edit Barang';
  }

  public function getNewTitle()
  {
    return 'New Barang';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'nama_barang',  2 => 'id_kategori',  3 => 'stock',  4 => 'id_kemasan',  5 => 'id_produsen',  6 => 'description',  7 => 'id_harga',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nama_barang' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_kategori' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'stock' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_kemasan' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'id_produsen' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'id_harga' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'nama_barang' => array(),
      'id_kategori' => array(),
      'stock' => array(),
      'id_kemasan' => array(),
      'id_produsen' => array(),
      'description' => array(),
      'id_harga' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'nama_barang' => array(),
      'id_kategori' => array(),
      'stock' => array(),
      'id_kemasan' => array(),
      'id_produsen' => array(),
      'description' => array(),
      'id_harga' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'nama_barang' => array(),
      'id_kategori' => array(),
      'stock' => array(),
      'id_kemasan' => array(),
      'id_produsen' => array(),
      'description' => array(),
      'id_harga' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'nama_barang' => array(),
      'id_kategori' => array(),
      'stock' => array(),
      'id_kemasan' => array(),
      'id_produsen' => array(),
      'description' => array(),
      'id_harga' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'nama_barang' => array(),
      'id_kategori' => array(),
      'stock' => array(),
      'id_kemasan' => array(),
      'id_produsen' => array(),
      'description' => array(),
      'id_harga' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'barangForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'barangFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfPropelPager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getPeerMethod()
  {
    return 'doSelect';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}
