<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DataImportCommand extends ContainerAwareCommand
{
	
	protected function configure()
	{
		$this->setName('app:import:data');
		$this->setDescription('Imports Data from Local Excel File');
	}
	
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$dataService = $this->getContainer()->get('app.data');
		$dataService->importData();
	}
}