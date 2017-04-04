<?php

namespace Clicker\Models;

use Illuminate\Database\Eloquent\Model;
use Clicker\Models\Quiz;
use Clicker\Models\Student;



class Question extends Model{

	public function quiz(){
		return $this->belongsTo(Quiz::class);
	}

	public function students(){
		return $this->belongsToMany(Student::class, 'question_student')->withPivot('answer');
	}
}