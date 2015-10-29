@extends('admin.template.main')

@section('title','Editar categoria: '. $category->name)

@section('content')

    {!!Form::model($category,['route'=>['admin.categories.update',$category],'method'=>'PUT'])!!}

	    <div class="form-group">
			{!!Form::label('nombre','Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre categoria'])!!}
		</div>
		
			

	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}<br>

	{!!Form::open(['route'=>['admin.categories.destroy', $category], 'method' => 'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}


@endsection