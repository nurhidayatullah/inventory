<?php

/**
 * kemasan module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage kemasan
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseKemasanGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'kemasan' : 'kemasan_'.$action;
  }
}
