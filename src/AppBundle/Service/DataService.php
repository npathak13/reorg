<?php

namespace AppBundle\Service;

use AppBundle\Entity\PaymentData;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DataService
{
	private $_em;
	private $_kernel;
	private $_phpExcel;
	
	CONST FILE_PATH = "@AppBundle/Data/";
	CONST EXPORT_PATH = "@AppBundle/Exports/";
	
	public function __construct($em, $kernel, $phpExcel)
	{
		$this->_em = $em;
		$this->_kernel = $kernel;
		$this->_phpExcel = $phpExcel;
	}
	
	public function importData()
	{
		$dataFile = $this->_kernel->locateResource(self::FILE_PATH . 'test_payment_data.xls');
		$phpExcelObject = $this->_phpExcel->createPHPExcelObject($dataFile);
		$paymentDataRepo = $this->_em->getRepository('AppBundle:PaymentData');
		foreach($phpExcelObject->getWorksheetIterator() as $worksheet){
    		foreach($worksheet->getRowIterator() as $row){
    			$rowIndex = $row->getRowIndex();
    			if($rowIndex > 1){
    				$cellIterator = $row->getCellIterator();
    				$cellIterator->setIterateOnlyExistingCells(false);
    				$paymentData = new PaymentData();
    				foreach($cellIterator as $cell){
    					$cellColumn = $cell->getColumn();
    					$cellValue = $cell->getFormattedValue();
    					$paymentDataRepo->setObjectPropertyFromColumnPosition($paymentData, $cellColumn, $cellValue);
    				}
    				$this->_em->persist($paymentData);
    				$this->_em->flush();
				}
    		}
    	}
	}
	
	public function retrieveLatestExport()
	{
		$recentExport = $this->_kernel->locateResource(self::EXPORT_PATH . 'latest_export.xls');
		$response = new BinaryFileResponse($recentExport);
		$response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
		$response->headers->set('Pragma', 'Public');
		$dispositionHeader = $response->headers->makeDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, 'latest_export.xls');
		return $response;
		
	}
	
	public function prepareDataDownload($exportData)
	{
		$paymentDataRepo = $this->_em->getRepository('AppBundle:PaymentData');
		$entityIds = json_decode($exportData);
		$entityArray = $paymentDataRepo->getEntitiesFromIdArray($entityIds);
		$phpExcelObject = $this->_phpExcel->createPHPExcelObject();
		$phpExcelObjectWithMetaData = $this->_addExcelMetaData($phpExcelObject);
		$populatedSheet = $paymentDataRepo->populateSpreadsheetData($entityArray, $phpExcelObjectWithMetaData);
		$writer = $this->_phpExcel->createWriter($populatedSheet, 'Excel5');
		$savePath = $this->_kernel->locateResource(self::EXPORT_PATH);
		$writer->save($savePath . 'latest_export.xls');
	}
	
	private function _addExcelMetaData($phpExcelObject)
	{
		$phpExcelObject->getProperties()->setCreator('Niraj Pathak')
		->setLastModifiedBy('Niraj Pathak')
		->setTitle('Reorg Research Case Study')
		->setSubject('Reorg Research Case Study')
		->setDescription('Export file')
		->setKeyWords('Reorg')
		->setCategory('Interview Questions');
		$phpExcelObject->setActiveSheetIndex(0);
		return $phpExcelObject;
	}
}