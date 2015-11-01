@extends('layout')

@section('title') 
    Inicio 
@endsection

@section('content')
      <div id="content" class="container"> 
        	<div class="row">
        		<div class="col-md-8 ">
        			<h1>Ultimas Noticias</h1>
        			@foreach($articles as $article)  
        			<article>
        				<h2><a href="singlepost.html">{{$article ->title}}</a></h2>
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
        					<img src="images/lisa.jpg" class="img-responsive">
        					<p class = "noticia">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas molestias quas, quaerat ea recusandae. Dolore distinctio molestiae, vel voluptatem cumque, alias iure laborum numquam voluptatum in obcaecati nostrum ea, et atque. Perspiciatis beatae dolores, vitae eveniet tempora suscipit tempore quidem.</p>

						 
						    <p class="text-right">
			                    <a class="btn btn-primary" href="#" role="button">Leer mas..</a>
                			</p>
 
    						<hr>
        					
        				</div> <!-- fin clase row del article -->
        			</article>

        			 @endforeach


        			
        			
        			<!-- paginacion -->
        			{!! $articles->render() !!}
        		</div> <!-- fin class col -md-8 -->
							
							<!-- SIDE BAR	-->
        		<div class="col-md-4 ">
					
 
    <!-- Subscribe to my feed widget -->

         <!--   widget -->
			     <div class="well text-center">
			        <p class="lead">
            			Don't want to miss updates? Please click the below button!
       				 </p>
			        <button class="btn btn-primary btn-lg">Subscribe to my feed</button>
			    </div>

		<!-- fin del widget -->

			    <div class="panel panel-default">
				    <div class="panel-heading">
				        <h4>Últimas Noticias</h4>
				    </div>
				    

				    <ul class="list-group">
				    @foreach($articles as $article) 
				        <li class="list-group-item"><a href="#">{{$article->title}}</a></li>
				        
				    @endforeach   
				    </ul>
				</div>
					

				<!-- fin del widget -->



				<div class="panel panel-default">
				    <div class="panel-heading">
				        <h4>Categorias</h4>
				    </div>
				    <ul class="list-group">
				    @foreach($articles as $article) 
				        <li class="list-group-item"><a href="#">{{$article->category->name}}</a></li>
				    @endforeach   
				    </ul>
				</div>

				<!-- fin del widget -->
 
   
        		
        		
        	</div> <!-- fin clase row -->


        </div>

        <footer>
		    <div class="container">
		        <hr />
		        <p class="text-center">Copyright © DigitalDatos 2016. Todos los derechos reservados.</p>
		    </div>
		</footer>

	
		
	
@endsection