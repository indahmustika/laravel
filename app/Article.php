<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "article";
    protected $fillable = [
    	'id',
    	'thumbnail',
    	'title',
    	'excerpt',
    	'content',
    	'status',
    	'author',
    	'updated_at',
    	'created_at'
    ];
}
