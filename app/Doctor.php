<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Doctor extends Authenticatable
{
    use SoftDeletes;


    protected $table="doctors";

    protected $dates = ['deleted_at'];

    public function department (){
        return $this->belongsTo('App\Department');
    }

    public function appointments (){
        return $this->hasMany('App\appointment');
    }

    public function duties (){
        return $this->belongsTo('App\Duty');
    }


}
