<?php

/**
 * liststok actions.
 *
 * @package    symfony
 * @subpackage liststok
 * @author     Your name here
 */
class liststokActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->barangs = BarangPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->barang = BarangPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->barang);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new barangForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new barangForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($barang = BarangPeer::retrieveByPk($request->getParameter('id')), sprintf('Object barang does not exist (%s).', $request->getParameter('id')));
    $this->form = new barangForm($barang);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($barang = BarangPeer::retrieveByPk($request->getParameter('id')), sprintf('Object barang does not exist (%s).', $request->getParameter('id')));
    $this->form = new barangForm($barang);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($barang = BarangPeer::retrieveByPk($request->getParameter('id')), sprintf('Object barang does not exist (%s).', $request->getParameter('id')));
    $barang->delete();

    $this->redirect('liststok/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $barang = $form->save();

      $this->redirect('liststok/edit?id='.$barang->getId());
    }
  }
}
