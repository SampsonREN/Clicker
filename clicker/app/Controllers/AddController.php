<?php

namespace Clicker\Controllers;

use Slim\Router;
use Slim\Views\Twig;
use Clicker\Models\Quiz;
use Clicker\Models\Question;
use Psr\Http\Message\ResponseInterface as Response; //Psr\Http\Message\ResponseInterface
use Psr\Http\Message\ServerRequestInterface as Request;



class AddController
{
	public function index(Request $request, Response $response, Twig $view, Router $router){

			

			return $view->render($response, 'create/index.twig');
	}
}