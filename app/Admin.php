<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Admin extends Model implements Authenticatable
{	
	use \Illuminate\Auth\Authenticatable;

    protected $table = 'admins';

    
}
