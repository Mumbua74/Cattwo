<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
class Fees extends Model
{
	public function students()
	{
		return $this->belongsToMany('App/Student');
	}
    //
}
