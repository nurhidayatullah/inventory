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
	
	public function executeImport(sfWebRequest $request,$msg=""){
		$this->form = $this->configuration->getForm();
		$this->msg = $msg;
	}
	public function executeImportfile(sfWebRequest $request){
		$allowed =  array('xlsx' ,'xls');
		$file = $request->getFiles('file');
		$fileSize = $file['size'];
		$fileType = $file['type'];
		$theFileName = $file['name'];
		$uploadDir = sfConfig::get("sf_upload_dir");
		$import = $uploadDir.'/import';

		if(!is_dir($import)){
			mkdir($import, 0777);            
		}
		$ext = pathinfo($theFileName, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
			$this->msg = 'file type not allowed';
			$this->setTemplate('import');
		}else{
			move_uploaded_file($file['tmp_name'], "$import/$theFileName");
			$this->getUser()->setFlash('notice', $notice.' You can add another one below.');
            $this->redirect('@barang');
		}
	}
	public function executeCetak(sfWebRequest $request){
		$excel = new PHPExcel();
		$query = $this->buildQuery();
		$data = BarangPeer::doSelect($query);
		
		$excel->setActiveSheetIndex(0);
		$i = 3;
		foreach($data as $barang){
			$excel->getActiveSheet()->setCellValue('A'.$i, $barang->getId());
			$excel->getActiveSheet()->setCellValue('B'.$i, $barang->getNamaBarang());
			$excel->getActiveSheet()->setCellValue('C'.$i, "".$barang->getKategori());
			$excel->getActiveSheet()->setCellValue('D'.$i, $barang->getStock());
			$excel->getActiveSheet()->setCellValue('E'.$i, "".$barang->getKemasan());
			$excel->getActiveSheet()->setCellValue('F'.$i, "".$barang->getProdusen());
			$excel->getActiveSheet()->setCellValue('G'.$i, $barang->getDescription());
			$i++;
		}
		// save to web directory
	/*	$objWriter = new PHPExcel_Writer_Excel2007($excel); 
		$objWriter->save('some_excel_file.xlsx'); */
		$this->downloadExcel($excel,"stok.xls");
	}
	
	private function downloadExcel($excel,$name){
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$name.'"');
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header ('Cache-Control: cache, must-revalidate'); 
		header ('Pragma: public');

		$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
		$objWriter->save('php://output');
		exit;
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
