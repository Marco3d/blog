@extends('admin.template.main')

@section('title', 'Lista de usuarios')
@endsection


@section('content')
	<a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Nuevo usuario</a><hr>
	@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  {{Session::get('message')}}
	  <!-- @include('flash::message') --> <!-- usanso paquete laracast flash -->
	</div>
    @endif
    <table class="table table-striped ">
 		<thead> 			
 			<th>Nombre</th>
 			<th>Email</th>
 			<th>Tipo</th>
 			<th>Acciones</th> 				
 		</thead>

 		<tbody>
 			<tr>
 			@foreach ($users as $user ) 
 			
 			<td>{{$user->name}}</td>
 			<td>{{$user->email}}</td>
	 		<td>	@if($user->type == "admin")
	 				<span class="label label-primary">Admin</span>
	 			@else
	 				<span class="label label-default">Miembro</span>
	 			@endif
	 		</td>	


 			<td><a class="btn btn-success" href="{{route('admin.users.edit', $user->id)}}"  role="button">
 			<i class="fa fa-pencil-square-o"></i></a>
 			<a class="btn btn-danger" href="{{route('admin.users.destroy', $user->id)}}" onclick="return confirm('¿Deseas eliminar el registro?')" role="button"><i class="fa fa-trash-o"></i></a>

 			    
 			</td>
 			</tr>
 			@endforeach	
 		</tbody>
 	</table>
 	{!! $users->render() !!}
   
@endsection