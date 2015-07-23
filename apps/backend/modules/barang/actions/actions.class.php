<?php

require_once dirname(__FILE__).'/../lib/barangGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/barangGeneratorHelper.class.php';

/**
 * barang actions.
 *
 * @package    symfony
 * @subpackage barang
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class barangActions extends autoBarangActions
{
	public function executeIndex(sfWebRequest $request)
    {
        parent::executeIndex($request);
        $this->baseBreadcrumbs();
    }

    public function executeNew(sfWebRequest $request)
    {
		parent::executeNew($request);
		$this->newBreadcrumbs();
    }

    public function executeEdit(sfWebRequest $request)
    {
        parent::executeEdit($request);
        $this->editBreadcrumbs();
    }
	
    private function baseBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Barang', '@barang');
    }
	
    private function newBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Barang', '@barang');
        isicsBreadcrumbs::getInstance()->addItem('New Barang', '@barang');
    }
	
    private function editBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Barang', '@barang');
        isicsBreadcrumbs::getInstance()->addItem('Edit Barang', '@barang');
    }
}
