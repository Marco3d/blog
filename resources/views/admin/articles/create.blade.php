@extends('admin.template.main')

@section('title','Crear articulos')

@endsection

@section('content')

           
 			

    		{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST']) !!}
				<div class="form-group">
					{!! Form::label('title','Titulo') !!}
					{!! Form::text('title',null,['class' =>'form-control', 'placeholder' =>'Título del articulo','required'])!!}
				</div>
				<div class="form-group">
					{!! Form::label('content','Contenido') !!}
					{!! Form::textarea('content',null,['class' =>'form-control', 'placeholder' =>'Contenido','required'])!!}
				</div>						
		   
				 <div class="form-group">
					{!! Form::label('usuario','Usuario') !!}
					{!! Form:: select('user_id',$users, null,['class'=>'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('categoria','Categoria') !!}
					{!! Form:: select('category_id',$categories, null,['class'=>'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Registrar', ['class' =>'btn btn-primary']) !!}
					
				</div>


			    
			{!! Form::close() !!}


@endsection
