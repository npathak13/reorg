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
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Finder\Finder;

class DefaultController extends Controller
{
	   
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:PaymentData')->getDistinctRecords();
        return array('entities' => $entities);
    }
    
    /**
     * @Route("/import", name="import_data")
     */
    public function importAction()
    {
    	$this->get('app.data')->importData();
    	$this->addFlash('success', 'Data Imported');
    	return new RedirectResponse($this->generateUrl('index'));
    }
    
    /**
     * @Route("export/data", name="export_data")
     */
    public  function exportAction()
    {
    	$request = $this->getRequest();
    	$exportData = $request->get('data');
    	$this->get('app.data')->prepareDataDownload($exportData);
    	$this->addFlash('success', 'Data Prepared for Download');
    	return new RedirectResponse($this->generateUrl('index'));
    }
    
    /**
     * @Route("retrieve/latest/export", name="retrieve_export")
     * 
     */
    public function retrieveLatestExport()
    {    	
    	return $this->get('app.data')->retrieveLatestExport();
    }

    
    /**
     * @Route("search/{parameters}", name="search_data")
     */
    public function searchAllPropertiesAction($parameters)
    {
    	$em = $this->getDoctrine()->getManager();
    	$results = $em->getRepository('AppBundle:PaymentData')->searchAllParams($parameters);
		$encoders = array(new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);
    	$jsonContent = $serializer->serialize($results, 'json');
    	return new Response($jsonContent);
    }
}
