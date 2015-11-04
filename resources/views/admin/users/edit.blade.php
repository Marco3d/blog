@extends('admin.template.main')

@section('title','Editar usuario: '. $user->name)

@section('content')

    {!!Form::model($user,['route'=>['admin.users.update',$user],'method'=>'PUT'])!!}

	    <div class="form-group">
			{!!Form::label('nombre','Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email','Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
		</div>
		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class' =>'form-control', 'placeholder' =>''])!!}
		</div>
		<div class="form-group">
			{!! Form::label('type','Tipo de usuario') !!}
			{!! Form:: select('type',[''=>'Seleccione tipo de usuario'  ,'member' => 'Miembro','admin'=>'Administrador'], null, ['class'=>'form-control']) !!}
		</div>
			

	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}<br>
	<!-- {!!Form::open(['route'=>['admin.users.destroy', $user], 'method' => 'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!} -->


@endsection