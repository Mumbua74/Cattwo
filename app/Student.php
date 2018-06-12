<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fees;
class Student extends Model
{
	public function FeesPay()
	{
		return $this->hasMany('App/Fees');
	}
    //
}
