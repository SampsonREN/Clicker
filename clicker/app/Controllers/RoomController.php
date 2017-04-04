<?php

namespace Clicker\Controllers;

use Slim\Router;
use Slim\Views\Twig;
use Clicker\Models\Question;
use Psr\Http\Message\ResponseInterface as Response; //Psr\Http\Message\ResponseInterface
use Psr\Http\Message\ServerRequestInterface as Request;



class RoomController
{
	public function start($slug, Request $request, Response $response, Twig $view, Router $router, Question $question){

			$question = $question->with('quiz')->where('slug',$slug)->first(); //first question of the quiz

			if(!$question){
				return $response -> withRedirect($router->pathFor('home'));
			}


			
		

			return $view->render($response, 'room/start.twig',[
					'question' => $question,
					'quiz' => $question->quiz,
				
				]);
	}
}