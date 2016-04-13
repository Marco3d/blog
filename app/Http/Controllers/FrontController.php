<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Jenssegers\Date\Date;





class FrontController extends Controller
{
	public function __construct(){
    $this->middleware('auth',['only' => 'admin']);
    Date::setLocale('es');

  }
    public function index(){
    	$articles= Article::OrderBy('id','DESC')->paginate(3);
        
        return view('index',compact('articles'));
    }

    public function admin(){
        return view('admin.index');
    }

   
    public function article($slug){
       
        $articles = Article::findBySlug($slug);


        return view('article',compact('articles'));
    } 


}
