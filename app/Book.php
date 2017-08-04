<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['title','aurhor_id','amount'];

    public function author()
    {
    	return $this->belongsTo('App\Author');
    }
}
