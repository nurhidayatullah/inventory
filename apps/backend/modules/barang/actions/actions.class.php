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
	
	public function executeImport(sfWebRequest $request,$msg=null){
		$this->form = $this->configuration->getForm();
		$this->msg = $msg;
		
		isicsBreadcrumbs::getInstance()->addItem('Barang', '@barang');
        isicsBreadcrumbs::getInstance()->addItem('Import Data', '@barang');
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
			$this->msg = 'file type not allowed. File Type Must ';
			$y = 0;
			foreach($allowed as $x){
				if($y!= count($allowed)-1){
					$this->msg .= $x." or ";
				}else{
					$this->msg .= $x;
				}
				$y++;
			}
			$this->setTemplate('import');
		}else{
			move_uploaded_file($file['tmp_name'], "$import/$theFileName");
			$inputFileName = $uploadDir.'/import/'.$theFileName;
			try {
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);
				$data = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
		
				for( $x = 3; $x <= count($data);$x++){
					
					$c = new Criteria();
					$c->add(KategoriPeer::NAMA_KATEGORI,$data[$x]['C'],Criteria::EQUAL);
					$kategori = $this->getIdColumn(KategoriPeer::doSelect($c));
					
					$k = new Criteria();
					$k->add(KemasanPeer::NAMA_KEMASAN,$data[$x]['E'],Criteria::EQUAL);
					$kemasan = $this->getIdColumn(KemasanPeer::doSelect($k));
					
					$p = new Criteria();
					$p->add(ProdusenPeer::NAMA_PRODUSEN,$data[$x]['F'],Criteria::EQUAL);
					$produsen = $this->getIdColumn(ProdusenPeer::doSelect($p));
					
					$barang = BarangQuery::create()->findOneById($data[$x]['A']);
					if(isset($barang)){
						$barang->setNamaBarang($data[$x]['B']);
						$barang->setIdKategori("".$kategori);
						$barang->setStock($data[$x]['D']);
						$barang->setIdKemasan("".$kemasan);
						$barang->setIdProdusen("".$produsen);
						$barang->setDescription($data[$x]['G']);
						$barang->save();
					}else{
						$barang = new Barang();
						$barang->setNamaBarang($data[$x]['B']);
						$barang->setIdKategori("".$kategori);
						$barang->setStock($data[$x]['D']);
						$barang->setIdKemasan("".$kemasan);
						$barang->setIdProdusen("".$produsen);
						$barang->setDescription($data[$x]['G']);
						$barang->save();
					}
				}
				unlink($inputFileName);
				$this->getUser()->setFlash('notice', $notice.' You can add another one below.');
				$this->redirect('@barang');
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}
			
		}
	}
	protected function getIdColumn($data){
		foreach($data as $data){
			return $data->getId();
		}
	}
	public function executeCetak(sfWebRequest $request){
		$excel = new PHPExcel();
		$query = $this->buildQuery();
		$data = BarangPeer::doSelect($query);
		
		$excel->setActiveSheetIndex(0);
		$excel->getActiveSheet()->mergeCells('A1:G1');
		$excel->getActiveSheet()->mergeCells('A2:G2');
		$excel->getActiveSheet()->mergeCells('A3:G3');
		
		$styleHeader = array(
			'font'  => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);
		$style = array(
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);
	
		$excel->getActiveSheet()->setCellValue('A4', "ID");
		$excel->getActiveSheet()->setCellValue('B4', "NAMA BARANG");
		$excel->getActiveSheet()->setCellValue('C4', "KATEGORI");
		$excel->getActiveSheet()->setCellValue('D4', "STOK");
		$excel->getActiveSheet()->setCellValue('E4', "KEMASAN");
		$excel->getActiveSheet()->setCellValue('F4', "PRODUSEN");
		$excel->getActiveSheet()->setCellValue('G4', "DESCRIPTION");
		for($i = 'A'; $i < 'H'; $i++){
			$excel->getActiveSheet()->getColumnDimension($i)->setAutoSize(true);
			$excel->getActiveSheet()->getStyle($i.'4')->applyFromArray($styleHeader);
			
			$excel->getActiveSheet()->getStyle($i.'4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		}
		
		$i = 5;
		foreach($data as $barang){
			$excel->getActiveSheet()->setCellValue('A'.$i, $barang->getId());
			$excel->getActiveSheet()->setCellValue('B'.$i, $barang->getNamaBarang());
			$excel->getActiveSheet()->setCellValue('C'.$i, "".$barang->getKategori());
			$excel->getActiveSheet()->setCellValue('D'.$i, $barang->getStock());
			$excel->getActiveSheet()->setCellValue('E'.$i, "".$barang->getKemasan());
			$excel->getActiveSheet()->setCellValue('F'.$i, "".$barang->getProdusen());
			$excel->getActiveSheet()->setCellValue('G'.$i, $barang->getDescription());
			
			for($j = 'A'; $j < 'H'; $j++){
				$excel->getActiveSheet()->getStyle($j.$i)->applyFromArray($style);
			}
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
