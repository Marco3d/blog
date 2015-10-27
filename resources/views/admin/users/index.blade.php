@extends('admin.template.main')

@section('title', 'Lista de usuarios')
@endsection

@section('content')
	<a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Nuevo usuario</a><hr>

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


 			<td>{!!link_to_route('admin.users.edit', $title = 'Editar', $parameters = $user, $attributes = ['class'=>'btn btn-success'] )!!}
 			    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> </button>
 			</td>
 			</tr>
 			@endforeach	
 		</tbody>
 	</table>
 	{!! $users->render() !!}
   
@endsection