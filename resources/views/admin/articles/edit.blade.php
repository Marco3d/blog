@extends('admin.template.main')

@section('title','Editar articulo: '. $article->title)

@section('content')

    {!!Form::model($article,['route'=>['admin.articles.update',$article],'method'=>'PUT','files' => true])!!}

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

			@if(empty($article->path))
 			  <img src="{{asset('images')}}/no-imagen.jpg" alt="" style="width:100px;"/>
 			 @else
 			 <img src="{{asset('images')}}/{{$article->path}}" alt="" style="width:100px;"/>
 			 @endif

		<div class="form-group">
					{!!Form::label('imagen','Imagen:')!!}
					{!!Form::file('path')!!}
		</div>
			
		
			

	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}<br>

	

@endsection