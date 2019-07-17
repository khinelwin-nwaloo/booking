<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Patient extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $table="patients";
    
	public function appointments (){
		return $this->hasMany('App\appointment');
	}
}