@extends('admin.template.main')

@section('title','Editar articulo: '. $article->title)

@section('content')

    {!!Form::model($article,['route'=>['admin.articles.update',$article],'method'=>'PUT'])!!}

	    <div class="form-group">
			{!!Form::label('title','Title:')!!}
			{!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Ingresa el título'])!!}
		</div>

		<div class="form-group">
					{!! Form::label('content','Contenido') !!}
					{!! Form::textarea('content',null,['class' =>'form-control', 'placeholder' =>'Contenido'])!!}
		</div>

		<div class="form-group">
					{!! Form::label('usuario','Usuario') !!}
					{!! Form:: select('user_id',$users, null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
					{!! Form::label('categoria','Categoria') !!}
					{!! Form:: select('category_id',$categories, null,['class'=>'form-control']) !!}
		</div>
			
		
			

	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}<br>

	<!-- {!!Form::open(['route'=>['admin.articles.destroy', $article], 'method' => 'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
	 -->

@endsection