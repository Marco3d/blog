<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    
    protected $fillable = ['name'];

    //tags pueden estar en varios articulos
    //relacion muchos a muchos con articulos

    public function articles(){
    	return $this->belongsToMany('App\Article')->withTimestamps();
    } 


}
