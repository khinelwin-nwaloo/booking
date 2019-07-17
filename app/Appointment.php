<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Appointment extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $table="appointments";

	public function patient() {
		return $this->belongsto('App\Patient');
	}
	public function doctor() {
		return $this->belongsto('App\Doctor');
	}
	public function department() {
		return $this->belongsto('App\Department');
	}
}
