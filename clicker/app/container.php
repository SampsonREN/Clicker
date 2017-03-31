<?php


use Slim\Views\TwigExtension;
use Slim\Views\Twig;
use Clicker\Models\Quiz;
use Clicker\Models\QuizDetail;
use Interop\Container\ContainerInterface;
use function DI\get;

use Clicker\Validation\Contracts\ValidatorInterface;
use Clicker\Validation\Validator;



return [
	'router' => DI\object(Slim\Router::class),
	ValidatorInterface::class => function(ContainerInterface $c){
		return new Validator;
	},
	
	Twig::class => function (ContainerInterface $c){
		$twig = new Twig(__DIR__ . '/../resources/views',[
				'cache' => false
			]);

		$twig -> addExtension(new TwigExtension(
				$c -> get('router'),
				$c -> get('request')->getUri()
			));

			

			return $twig;
	},

	Quiz::class => function (ContainerInterface $c){
		return new Quiz;
	},


	QuizDetail::class => function (ContainerInterface $c){
		return new QuizDetail;
	},

	
];
