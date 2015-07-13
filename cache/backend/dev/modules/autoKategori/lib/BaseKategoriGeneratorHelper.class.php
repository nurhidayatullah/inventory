<?php

/**
 * kategori module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage kategori
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseKategoriGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'kategori' : 'kategori_'.$action;
  }
}
