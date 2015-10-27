@extends('admin.template.main')

@section('title','Editar usuario: '. $user->name)

@section('content')

{{$user->name}}<br>
{{$user->email}}<br>
{{$user->type}}<br>
@endsection