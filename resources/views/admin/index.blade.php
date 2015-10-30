@extends('admin.template.main')

@section('title','Inicio')

@section('content')

		@if(Session::has('message-error'))
		<div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  {{Session::get('message-error')}}
		</div>
		@endif


    <h3>Bienvenidos a la Zona de administración</h3>


@endsection