<?php

/**
 * harga module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage harga
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseHargaGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'harga' : 'harga_'.$action;
  }
}
