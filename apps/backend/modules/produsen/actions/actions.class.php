<?php

require_once dirname(__FILE__).'/../lib/produsenGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/produsenGeneratorHelper.class.php';

/**
 * produsen actions.
 *
 * @package    symfony
 * @subpackage produsen
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class produsenActions extends autoProdusenActions
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
        isicsBreadcrumbs::getInstance()->addItem('Produsen', '@produsen');
    }
	
    private function newBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Barang', '@produsen');
        isicsBreadcrumbs::getInstance()->addItem('New Produsen', '@produsen');
    }
	
    private function editBreadcrumbs()
    {
        isicsBreadcrumbs::getInstance()->addItem('Produsen', '@produsen');
        isicsBreadcrumbs::getInstance()->addItem('Edit Produsen', '@produsen');
    }
}
