@extends('layout')

@section('title') 
    Inicio 
@endsection

@section('content')
      <div id="content" class="container"> 
        	<div class="row">
        		<div class="col-md-8 ">
        			<h1>Estas son últimas Noticias</h1>
        			@foreach($articles as $article)  
        			<article>
        				<h2><a href="{{'article'}}/{{$article->slug}}">{{$article ->title}}</a></h2>
        				<div class="row">
        					<div class="group1 col-sm-6 col-md-6">
            					<span class="glyphicon glyphicon-folder-open"></span> {{$article->category->name}}
                     			<span class="glyphicon glyphicon-user"></span> Escrito por: {{$article->user->name}}
                			
       						</div>
        					<div class="group2 col-sm-6 col-md-6">
                				<!-- <span class="glyphicon glyphicon-pencil"></span> <a href="singlepost.html#comments">20 Comments</a>    -->         
                  				<span class="glyphicon glyphicon-time"></span> {{$article->created_at}}                         
        					</div>
        					<hr>
        					<br />

                            
        					@if(empty($article->path))
        					@else
        					<img src="{{route('home')}}/images/{{$article->path}}" class="img-responsive">
        					@endif

        					<p class = "noticia">{{substr($article->content, 0,300)}}... </p>

						 		
						    <p class="text-right">
			                    <a class="btn btn-primary" href="{{'article'}}/{{$article->slug}}" role="button">Leer mas..</a>
                			</p>


 
    						<hr>
        					
        				</div> <!-- fin clase row del article -->
        			</article>

        			 @endforeach


        			
        			
        			<!-- paginacion -->
        			{!! $articles->render() !!}

        		</div> <!-- fin class col -md-8 -->

 
   						@include('partials/widgets')
        		
        		
        	</div> <!-- fin clase row -->


        </div>

        <footer>
		    <div class="container">
		        <hr />
		        <p class="text-center">Copyright © DigitalDatos 2016. Todos los derechos reservados.</p>
		    </div>
		</footer>

	
		
	
@endsection