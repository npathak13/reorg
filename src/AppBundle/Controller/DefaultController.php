<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\AppBundle;
use AppBundle\Entity\PaymentData;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    const FILE_PATH = '@AppBundle/Data/';
    
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:PaymentData')->findAll();
        return array('entities' => $entities);
    }
    
    /**
     * @Route("/import", name="import_data")
     */
    public function importAction()
    {
    	$kernel = $this->get('kernel');
    	$dataFile = $kernel->locateResource(self::FILE_PATH . 'test_payment_data.xls');
    	$phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($dataFile);
    	$em = $this->getDoctrine()->getManager();
    	$paymentDataRepo = $em->getRepository('AppBundle:PaymentData');
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
    				$em->persist($paymentData);
    				$em->flush();
				}
    		}
    	}
    	return new RedirectResponse($this->generateUrl('index'));
    }
    
    /**
     * @Route("export/data", name="export_data")
     * @Method("POST")
     */
    public  function exportAction()
    {
    	$request = $this->getRequest();
    	$exportData = $request->get('data');
    	$em = $this->getDoctrine()->getManager();
    	$paymentDataRepo = $em->getRepository('AppBundle:PaymentData');
    	$entityIds = json_decode($exportData);
    	$entityArray = array();
    	foreach($entityIds as $oneId ){
    		if($oneId != null){
    			$entityArray[] = $paymentDataRepo->find($oneId);
    		}
    	}
    	$phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
    	$phpExcelObject->getProperties()->setCreator('Niraj Pathak')
    		->setLastModifiedBy('Niraj Pathak')
    		->setTitle('Reorg Research Case Study')
    		->setSubject('Reorg Research Case Study')
    		->setDescription('Export file')
    		->setKeyWords('Reorg')
    		->setCategory('Interview Questions');
    	$phpExcelObject->setActiveSheetIndex(0);
    	$populatedSheet = $paymentDataRepo->populateSpreadsheetData($entityArray, $phpExcelObject);
    	$writer = $this->get('phpexcel')->createWriter($populatedSheet, 'Excel5');
    	$response = $this->get('phpexcel')->createStreamedResponse($writer);
    	$dispositionHeader = $response->headers->makeDisposition(
    			ResponseHeaderBag::DISPOSITION_ATTACHMENT,
    			'stream-file.xls'
    	);
    	$response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
    	$response->headers->set('Pragma', 'public');
    	$response->headers->set('Cache-Control', 'maxage=1');
    	$response->headers->set('Content-Disposition', $dispositionHeader);
    	
    	return $response;
    }
    
    /**
     * @Route("search/{parameters}", name="search_data")
     */
    public function searchAllPropertiesAction($parameters)
    {
    	$em = $this->getDoctrine()->getManager();
    	$results = $em->getRepository('AppBundle:PaymentData')->searchAllParams($parameters);
		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);
    	$jsonContent = $serializer->serialize($results, 'json');
    	return new Response($jsonContent);
    }
}
