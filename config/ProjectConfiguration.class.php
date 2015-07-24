<?php

require __DIR__ .'/../lib/vendor/autoload.php';

require_once dirname(__FILE__).'/..\lib\vendor\symfony\lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
		$this->enablePlugins(
			array('sfPropelORMPlugin','sfBootstrapPropelAdminThemePlugin','isicsBreadcrumbsPlugin')
		);
	
	sfConfig::set('sf_phing_path', sfConfig::get('sf_lib_dir') .'/vendor/phing/phing');
    sfConfig::set('sf_propel_path', sfConfig::get('sf_lib_dir') .'/vendor/propel/propel1');
    
	set_include_path(sfConfig::get('sf_lib_dir').'/vendor/phpExcel'.PATH_SEPARATOR.get_include_path());
	require_once sfConfig::get('sf_lib_dir').'/vendor/phpExcel/PHPExcel.php';
  }
}
