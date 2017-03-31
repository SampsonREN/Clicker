<?php

namespace Clicker\Controllers;

use Slim\Views\Twig;
use Clicker\Models\Quiz;
use Psr\Http\Message\ResponseInterface as Response; //Psr\Http\Message\ResponseInterface
use Psr\Http\Message\ServerRequestInterface as Request;



class HomeController
{
	public function index(Request $request, Response $response, Twig $view, Quiz $quiz)
	{


		$quizes = $quiz -> get();
		return $view -> render($response, 'home.twig', [
				'quizes'=> $quizes

			]);
	}
}