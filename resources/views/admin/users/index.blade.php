@extends('admin.template.main')

@section('title', 'Lista de usuarios')
@endsection

@section('content')
<div class="container">
	 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Lista de usuarios</h3>
  </div>
  <div class="panel-body">
    	<table class="table table-bordered ">
 		<thead>
 		<tr>
 			
 			<td>Nombre</td>
 			<td>Email</td>
 			<td>Tipo</td>
 			<td>Acciones</td>
 		</tr>
 			
 		</thead>
 		<tbody>
 			<tr>
 			@foreach ($users as $user ) 
 			
 			<td>{{$user->name}}</td>
 			<td>{{$user->email}}</td>
 			<td>{{$user->type}}</td>
 			<td><button type="button" class="btn btn-success">Editar</button>
 			    <button type="button" class="btn btn-danger">Eliminar</button>
 			</td>
 			</tr>
 			@endforeach	
 		</tbody>
 	</table>
 	{!! $users->render() !!}
  </div>
</div>
 	
</div> 
@endsection