<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Department extends Model
{

	protected $table="departments";

	public function doctors() {
		return $this->hasMany('App\Doctor');
	}

	public function appointments() {
		return $this->hasMany('App\Appointment');
	}
}
