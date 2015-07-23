<?php

require_once dirname(__FILE__).'/../lib/kemasanGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/kemasanGeneratorHelper.class.php';

/**
 * kemasan actions.
 *
 * @package    symfony
 * @subpackage kemasan
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class kemasanActions extends autoKemasanActions
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
        isicsBreadcrumbs::getInstance()->addItem('Kemasan', '@kemasan');
    }
	
    private function newBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Kemasan', '@kemasan');
        isicsBreadcrumbs::getInstance()->addItem('New Kemasan', '@kemasan');
    }
	
    private function editBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Kemasan', '@kemasan');
        isicsBreadcrumbs::getInstance()->addItem('Edit Kemasan', '@kemasan');
    }
}
