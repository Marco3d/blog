<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Category;
use Session;
use Redirect;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articles= Article::OrderBy('id','ASC')->paginate(4);
        return view('admin.articles.index',compact('articles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $users = User::lists('name', 'id');
         $categories =Category::lists('name', 'id');

         return view('admin.articles.create',compact('users','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articles = new Article($request->all());
        
        //dd($categories);
        $articles->save();
        Session::flash('message','Articulo Creado Correctamente');
        return redirect::to('admin/articles') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $users = User::lists('name', 'id');
         $categories =Category::lists('name', 'id');


         $article = Article::find($id);
         //dd($article);
         return view('admin.articles.edit',compact('users','categories','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->  fill($request->all());
             
        $article->save();
        Session::flash('message','Articulo editado Correctamente');
        return redirect::to('admin/articles') ;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Article::destroy($id);
         Session::flash('message','Articulo eliminado Correctamente');
         return redirect::to('admin/articles') ;
    }

    


}
