<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    //una categoria puede tener muchos articulos
    //relacion uno a muchos
    //se define la función en plural
    public function articles(){
    	return $this->hasMany('App\Article');
    }
}
