<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de administración</title>
	<link rel="stylesheet"  href="{{ asset('css/bootstrap.css')}}">
</head>
<body>
	@include('admin.template.partials.nav')
   <section>
   	@yield('content')
   </section>

  

   <script src="{{ asset('js/jquery.js')}}"></script>
   <script src="{{ asset('js/bootstrap.js')}}"></script>
	
</body>
</html>