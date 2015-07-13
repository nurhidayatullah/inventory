<?php

/**
 * barang module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage barang
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseBarangGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'barang' : 'barang_'.$action;
  }
}
