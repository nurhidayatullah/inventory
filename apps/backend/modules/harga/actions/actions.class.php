<?php

require_once dirname(__FILE__).'/../lib/hargaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/hargaGeneratorHelper.class.php';

/**
 * harga actions.
 *
 * @package    symfony
 * @subpackage harga
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class hargaActions extends autoHargaActions
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
        isicsBreadcrumbs::getInstance()->addItem('Harga', '@harga');
    }
	
    private function newBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Harga', '@harga');
        isicsBreadcrumbs::getInstance()->addItem('New Harga', '@harga');
    }
	
    private function editBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Harga', '@harga');
        isicsBreadcrumbs::getInstance()->addItem('Edit Harga', '@harga');
    }
}
