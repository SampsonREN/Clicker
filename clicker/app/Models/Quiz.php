<?php

namespace Clicker\Models;

use Illuminate\Database\Eloquent\Model;
use Clicker\Models\Question;



class Quiz extends Model{

	public $table = 'quizs';

	public function questions(){
		return $this->hasMany(Question::class);
	}

	
}