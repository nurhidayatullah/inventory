<?php

/**
 * produsen module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage produsen
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseProdusenGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'produsen' : 'produsen_'.$action;
  }
}
