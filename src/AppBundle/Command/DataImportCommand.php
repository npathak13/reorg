<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DataImportCommand extends ContainerAwareCommand
{
	const FILE_PATH = '@AppBundle/Data/';
	
	protected function configure()
	{
		$this->setName('app:import:data');
		$this->setDescription('Imports Data from Local Excel File');
	}
	
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$container = $this->getContainer();
		$kernel = $container->get('kernel');
		$phpExcelService = $container->get('phpexcel');
		$dataFile = $kernel->locateResource(self::FILE_PATH . 'payment_data.xls');
		$phpExcelObject = $phpExcelService->createPHPExcelObject($dataFile);
		var_dump($phpExcelObject);
	}
}