<?php

require_once dirname(__FILE__).'/../lib/kategoriGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/kategoriGeneratorHelper.class.php';

/**
 * kategori actions.
 *
 * @package    symfony
 * @subpackage kategori
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class kategoriActions extends autoKategoriActions
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
        isicsBreadcrumbs::getInstance()->addItem('Kategori', '@kategori');
    }
	
    private function newBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Kategori', '@kategori');
        isicsBreadcrumbs::getInstance()->addItem('New Kategori', '@kategori');
    }
	
    private function editBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Kategori', '@kategori');
        isicsBreadcrumbs::getInstance()->addItem('Edit Kategori', '@kategori');
    }
}
