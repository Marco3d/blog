    <header>  
        <nav class="navbar navbar-inverse">
       <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Blog</a>
          </div> <!-- fin clase navbar header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <!-- <li class="active"><a href="">Home <span class="sr-only">(current)</span></a></li> -->
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="{{route('administrador')}}">Administrador</a></li>
              </ul>  <!-- fin clase nav navbar nav   --> 

              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
               <button type="submit" class="btn btn-default">Submit</button> 
                    </form> <!-- fin clase nav bar form   -->     
            </div> <!-- fin clase collapse nav bar -->

          <div><!--  fin clase container-fluid -->
        </nav> <!-- fin clase navbar navbar-inverse -->
      </header> 
