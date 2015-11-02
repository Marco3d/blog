@extends('layout')

@section('title') 
    Inicio 
@endsection

@section('content')
      <div id="content" class="container"> 
        	<div class="row">
        		<div class="col-md-8 ">
        		
        			<article>
        				<h1>{{$articles ->title}}</a></h1>
        				<div class="row">
        					<div class="group1 col-sm-6 col-md-6">
            					<span class="glyphicon glyphicon-folder-open"></span> {{$articles->category->name}}
                     			<span class="glyphicon glyphicon-user"></span> Escrito por: {{$articles->user->name}}
                			
       						</div>
        					<div class="group2 col-sm-6 col-md-6">
                				<!-- <span class="glyphicon glyphicon-pencil"></span> <a href="singlepost.html#comments">20 Comments</a>    -->         
                  				<span class="glyphicon glyphicon-time"></span> {{$articles->created_at}}                         
        					</div>
        					<hr>
        					<br />
        					@if(empty($articles->path))
                            @else
                            <img src="{{route('home')}}/images/{{$articles->path}}" class="img-responsive">
                            @endif
        					<p class = "noticia">{{$articles->content}}</p>

						 
 
    						
        					
        				</div> <!-- fin clase row del article -->
        			</article>

                    <hr>
                   <!--  comentarios con facebook -->

                   <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>


                <div class="fb-comments" data-href="http://blog.app/article/{{$articles->slug}}" 
                     data-width="100%" data-numposts="10">
                 </div>

        		
        		
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