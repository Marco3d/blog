<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de administración</title>
	<link rel="stylesheet"  href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet"  href="{{ asset('css/font-awesome.min.css')}}">
	<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
</head>
<body>
	<br><br>
               <div class="container">

					



						<div class="panel panel-primary">
						  <div class="panel-heading">
						    <h3 class="panel-title"><b>INGRESO</b></h3>
						  </div>
						  <div class="panel-body">
						    {!!Form::open()!!}
								<div class="form-group">
									{!!Form::label('correo','Correo:')!!}	
									{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
								</div>
								<div class="form-group">
									{!!Form::label('contrasena','Contraseña:')!!}	
									{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
								</div>
									{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
								    {!!Form::close()!!}
						  </div>
						</div>
					


               		
               </div>                
  

   <script src="{{ asset('js/jquery.js')}}"></script>
   <script src="{{ asset('js/bootstrap.js')}}"></script>
	
</body>
</html>