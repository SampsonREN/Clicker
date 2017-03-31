<?php

namespace Clicker\Controllers;

use Slim\Router;
use Slim\Views\Twig;
use Clicker\Models\QuizDetial;
use Psr\Http\Message\ResponseInterface as Response; //Psr\Http\Message\ResponseInterface
use Psr\Http\Message\ServerRequestInterface as Request;



class RoomController
{
	public function start($slug, Request $request, Response $response, Twig $view, Router $router, QuizDetail $quizDetail){

			//$quizDetail = $quizDetail -> where('slug',$slug)->first();

			//if(!$quiz){
			//	return $response -> withRedirect($router->pathFor('home'));
			//}

			return $view->render($response, 'room/start.twig',[
					//'quizDetail' => $quizDetail,

				]);
	}
}