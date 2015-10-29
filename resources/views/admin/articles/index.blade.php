@extends('admin.template.main')

@section('title', 'Lista de Articulos')
@endsection


@section('content')
	<a class="btn btn-info" href="{{route('admin.articles.create')}}" role="button">Nuevo Articulo</a><hr>
	@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  {{Session::get('message')}}
	</div>
    @endif
    <table class="table table-striped ">
 		<thead> 			
 			<th>Nombre</th>
 			<th>Contenido</th>
 			<th>Autor</th>
 			<th>Categoria</th>
 			<th>Slug</th>
 			<th>Publicado</th>
 			<th>Modificado</th>


 			
 			<th>Acciones</th> 				
 		</thead>

 		<tbody>
 			<tr>
 			@foreach ($articles as $article ) 
 			
 			<td>{{$article->title}}</td>
 			<td>{{$article->content}}</td>
 			<td>{{$article->user->name}}</td>
 			<td>{{$article->category->name}}</td>
 			<td>{{$article->slug}}</td>
 			<td>{{$article->created_at}}</td>
 			<td>{{$article->updated_at}}</td>

 			

 			<td>{!!link_to_route('admin.articles.edit', $title = '', $parameters = $article, $attributes = ['class'=>'btn btn-success fa fa-pencil-square-o'] )!!}

 			    
 			</td>
 			</tr>
 			@endforeach	
 		</tbody>
 	</table>
 	{!! $articles->render() !!}
   
@endsection