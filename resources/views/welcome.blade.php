<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{'assets/css/estilo.css'}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        
    </head>
    <body bgcolor="#E8E8E8" style="margin-left: 5%;">
  	<header>
	<div class="row d-flex justify-content-center p-4">
		<div>
			<img id="logo" src="{{asset('assets/img/logo.JPG')}}">
		</div>
		<div class="p-1">
			<p class="display-4">Banco del Tiempo</p>
		</div>
	</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Links -->
		  <a class="navbar-brand" href="#">Inicio</a>
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#">Quienes somos</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Como funciona</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Foro</a>
		    </li>
		  </ul>
  		<ul class="nav navbar-nav flex-row ml-auto">
	        <li class="dropdown order-1">
	            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Iniciar Sesión</button>
	            <ul class="dropdown-menu dropdown-menu-right mt-2">
	               <li class="p-3">
	                   <form class="form" role="form">
	                        <div class="form-group">
	                            <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
	                        </div>
	                        <div class="form-group">
	                            <input id="passwordInput" placeholder="Contraseña" class="form-control form-control-sm" type="text" required="">
	                        </div>
	                        <div class="form-group">
	                            <button type="submit" class="btn btn-primary btn-block">Login</button>
	                        </div>
	                        <div class="form-group text-center">
	                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">¿Contraseña olvidada?</a></small>
	                        </div>
	                    </form>
	                </li>
	            </ul>
	        </li>
        </ul>
	</nav>
	</header><!-- /header -->
	<div id="carousel" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		  	<div class="carousel-item active">
		      <img class="d-block" src="{{asset('assets/img/intercambio.jpg')}}" alt="First slide">
		      <div class="carousel-caption d-none d-md-block w-25 p-1 bg-dark" style="margin-left: 25%;">
			      <h4>Intercambia habilidades entre los <br> usuarios sin utilizar dinero </h4>
  			  </div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block" src="{{asset('assets/img/clase.jpg')}}" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block" src="{{asset('assets/img/mecanico.gif')}}" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block" src="{{asset('assets/img/programador.png')}}" alt="First slide">
		    </div>
		  </div>
	</div>
	<div id="explicacion" class="text-md-center col-md-5">
		<h3>¿Que es un banco del tiempo?</h3>
		<p>Un Banco de Tiempo es una herramienta con la cual un grupo de personas puede crear una alternativa económica social. En un Banco de Tiempo se intercambian habilidades entre los miembros sin utilizar dinero, únicamente se contabilizan las horas de servicio prestado y recibido.</p>
	</div>
	<div id="contenedor" class="row">
		<div id="ofrecer" class="col-md-4 col-sm-7 col-xs-10">
			
		</div>
		<div id="recibir" class="col-md-4 col-sm-7 col-xs-10">
			<h1>Recibe</h1>
		</div>
	</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5>Banco Del Tiempo</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Foro</a></li>
                            <li><a href="">Beneficios</a></li>
                            <li><a href="">Partners</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Quienes somos</a></li>
                            <li><a href="">Soporte</a></li>
                            <li><a href="">Términos</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Contacto</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form id="store" method="post" action="{{route('guardarcontacto')}}">
                    @csrf
                	<fieldset class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </fieldset>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Introduce email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="submit" class="bg-faded btn-sm">Enviar</button>
                    </fieldset>
                    @if ($errors ->has('nombre'))
                    <a class="error">{{ $error->first('nombre') }}</a><br>
                    @endif
                    @if ($errors ->has('nombre'))
                    <a class="error">{{ $error->first('email') }}</a><br>
                    @endif
                    @if ($errors ->has('nombre'))
                    <a class="error">{{ $error->first('mensaje') }}</a><br>
                    @endif
                </form>
            </div>
        </div>
    </div>
</footer>
	
    

  </body>
</html>
