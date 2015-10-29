@extends('admin.template.main')

@section('title', 'Lista de Categorias')
@endsection


@section('content')
	<a class="btn btn-info" href="{{route('admin.categories.create')}}" role="button">Nueva Categoria</a><hr>
	@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  {{Session::get('message')}}
	</div>
    @endif
    <table class="table table-striped ">
 		<thead> 			
 			<th>Nombre</th>
 			
 			<th>Acciones</th> 				
 		</thead>

 		<tbody>
 			<tr>
 			@foreach ($categories as $category ) 
 			
 			<td>{{$category->name}}</td>
 			

 			<td>{!!link_to_route('admin.categories.edit', $title = '', $parameters = $category, $attributes = ['class'=>'btn btn-success fa fa-pencil-square-o'] )!!}

 			    
 			</td>
 			</tr>
 			@endforeach	
 		</tbody>
 	</table>
 	{!! $categories->render() !!}
   
@endsection