<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;




class FrontController extends Controller
{
	
    public function index(){
    	$articles= Article::OrderBy('id','DESC')->paginate(3);
        return view('index',compact('articles'));
    }

    public function admin(){
        return view('admin.index');
    }

    public function logindex(){
        return view('admin.login');
    }

}
