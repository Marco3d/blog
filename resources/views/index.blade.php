@extends('layout')

@section('title') 
    Inicio de mi página 
@endsection

@section('content')
 <div class="container">
  @foreach($articles as $article)    	    
	  <div class="panel panel-primary">
	  	<div class="panel-heading">
	  		<h3 class="panel-title">{{$article ->title}} por <i class="fa fa-pencil-square-o"></i> <i>{{$article->user->name}}</i></h3>
	  	</div>
	  	<div class="panel-footer"><i class="fa fa-folder"></i> Categoria :<i>{{$article->category->name}}</i></div>
	  	<div class="panel-body">
	  		{{$article ->content}}
	  	</div>
	  	<div class="panel-footer"><i class="fa fa-clock-o"></i> Fecha publicación :{{$article->created_at}}</div>

	  </div>
  @endforeach

</div> 
<div class="container">
	{!! $articles->render() !!}
</div> 



	
		
	
@endsection