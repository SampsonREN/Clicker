<?php

namespace Clicker\Controllers;

use Slim\Router;
use Slim\Views\Twig;
use Clicker\Models\Quiz;
use Clicker\Models\Question;
use Illuminate\Database\Eloquent\Concerns;
use Psr\Http\Message\ResponseInterface as Response; //Psr\Http\Message\ResponseInterface
use Psr\Http\Message\ServerRequestInterface as Request;



class StatisticController
{
	public function index($slug, Request $request, Response $response, Twig $view, Router $router, Quiz $quiz){


			$quiz = $quiz->with(['questions'])->where('slug',$slug)->first();


			if(!$quiz){
				return $response -> withRedirect($router->pathFor('home'));
			}
			 

			$questions = $quiz->questions->withCount('student_id')->get();


			echo $questions[0]->student_id_count;

			die();
			



			return $view->render($response, 'stats/index.twig', [
					'quiz' => $quiz,
					'questions' => $questions,

				]);
	}


	public function update( Request $request, Response $response, Twig $view, Router $router, Question $question){
			//$total = $question->
	}
}