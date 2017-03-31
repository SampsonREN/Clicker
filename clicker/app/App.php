<?php

namespace Clicker;

use DI\ContainerBuilder;
use DI\Bridge\Slim\App as DiBridge;


class App extends DiBridge 
{
	//phpinfo();
	protected function configureContainer(ContainerBuilder $builder)
	{
		$builder -> addDefinitions([
				'settings.displayErrorDetails' => true,
		]);
		
		$builder -> addDefinitions(__DIR__ . '/container.php');
	}

	
}