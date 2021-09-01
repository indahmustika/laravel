<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $table = 'user';
    protected $fillable =[
    	'id',
    	'username',
    	'password',
    	'email',
    	'updated_at',
    	'created_at'
    ];
}