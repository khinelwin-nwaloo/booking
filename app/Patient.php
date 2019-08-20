<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
	
	use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $table="patients";
    
	public function appointments (){
		return $this->hasMany('App\appointment');
	}
}
