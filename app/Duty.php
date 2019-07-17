<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{

	protected $table="duties";
	
	public function doctor() {
		return $this->hasMany('App\Doctor');
	}

}
