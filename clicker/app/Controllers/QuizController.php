<?php

namespace Clicker\Controllers;

use Slim\Router;
use Slim\Views\Twig;
use Clicker\Models\Quiz;
use Psr\Http\Message\ResponseInterface as Response; //Psr\Http\Message\ResponseInterface
use Psr\Http\Message\ServerRequestInterface as Request;



class QuizController
{
	public function get($slug, Request $request, Response $response, Twig $view, Router $router, Quiz $quiz){

			$quiz = $quiz -> where('slug',$slug)->first();

			if(!$quiz){
				return $response -> withRedirect($router->pathFor('home'));
			}

			return $view->render($response, 'quizes/quiz.twig',[
					'quiz' => $quiz,

				]);
	}
}