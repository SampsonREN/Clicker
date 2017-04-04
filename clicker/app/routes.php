<?php

$app -> get('/', ['Clicker\Controllers\HomeController', 'index']) -> setName('home');


$app -> get('/quizes/{slug}', ['Clicker\Controllers\QuizController', 'get']) -> setName('quiz.get');

$app -> get('/quizes/add/new', ['Clicker\Controllers\AddController', 'index']) -> setName('quiz.add');

$app -> get('/quizes/{slug}/start', ['Clicker\Controllers\RoomController', 'start']) -> setName('quiz.start');

$app -> get('/quizes/{slug}/stats', ['Clicker\Controllers\StatisticController', 'index']) -> setName('quiz.stats');



