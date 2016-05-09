<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\AppBundle;
use AppBundle\Entity\PaymentData;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
		$session = $this->get('session');
		$session->getFlashBag()->add('success', 'Data Susccessfully Imported');
    	return new RedirectResponse($this->generateUrl('index'));
    }
}
