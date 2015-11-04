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
	@include('admin.template.partials.nav')
   <section>
    <div class="container">    	    
	  <div class="panel panel-primary">
	  	<div class="panel-heading">
	  		<h3 class="panel-title">@yield('title')</h3>
	  	</div>
	  	<div class="panel-body">
	  	 
	  		@yield('content')
	  	</div>
	  </div>
    </div>  
   </section>

  

   <script src="{{ asset('js/jquery.js')}}"></script>
   <script src="{{ asset('js/bootstrap.js')}}"></script>
	
</body>
</html>