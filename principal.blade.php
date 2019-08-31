@extends('layouts.app')

@section('head')
<link rel="stylesheet"  href={!! asset('css/estilo.css') !!} />
@endsection

@section('title', 'Inicio')
 
@section('body')
 <!-- Contenedor principal -->
<div class="container-fluid">
	<!--HEADER-->
	<div class="row">
		<div class="col">
			<!--Barra de navegacion-->
			<nav class="navbar navbar-expand-lg navbar-light barraNav">
				  <img src="" width="30" height="30" alt="">
				  <a class="navbar-brand" href="/MenuPrincipal" ><b class="texto">Ulises</b></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				  </button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left: 70px">
				<div class="navbar-nav">
				      <a class="nav-item nav-link" href="/MenuPrincipal"><h6 class="activo">Inicio</h6><span class="sr-only">(current)</span></a>
				      <a class="nav-item nav-link" href="/Consultas"><h6 class="texto">Consultas</h6></a>
				      <a class="nav-item nav-link" href=" "><h6 class="texto">Matriculas</h6></a>
				      <a class="nav-item nav-link" href="/Solicitudes"><h6 class="texto">Solicitudes</h6></a>
				      <a class="nav-item nav-link" href="#abajo"><h6 class="texto">Contáctenos</h6></a>
				</div>
			 </div>
			</nav>
		</div>
	</div>  

	<!--contenido -->

	<div class="row" style="margin-top: 5px">

		 <!--carruser-->

		<div class="col">
			 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    <img src={!! asset('images/redes.jpg') !!} class="d-block w-100" alt="..." style="height: 450px">
				    </div>
				    <div class="carousel-item">
				    <img src={!! asset('images/tecnologia.jpg') !!} class="d-block w-100" alt="..." style="height: 450px">
				    </div>
				    <div class="carousel-item">
				    <img src={!! asset('images/redes.jpg') !!} class="d-block w-100" alt="..." style="height: 450px">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		</div> 

		<!--descripcion-->
		<div class="col" style="background-color: rgb(220,220,220);">

		    <p style="text-align: center; margin-top: 150px;"><i>La expresión transparente en este artículo no está relacionada con el valor “transparent” de las propiedades que admiten un color como valor (background-color, color), sino con los conceptos opaco, transparente y traslúcido: la posibilidad de un objeto para dejar pasar la luz (ver a través de él) o no y el grado en que lo hace. </i></p>
		</div>
	</div>

	<!--linea divisoria-->

    <hr width="85%" style="margin-top: 30px" />

    <!--contenedores de productos-->

	<div class="row" style="margin-top: 20px; background-color: rgb(220,220,220); " >
		 <div class="col" style="margin-left: 80px; margin-top: 10px">
			  <div class="card" style="width: 18rem;">
			  <img src={!! asset('images/redes.jpg') !!} class="card-img-top cardImage" alt="...">
			  <div class="card-body">
			  <h5 class="card-title" style="text-align: center;">¿Quiénes somos?</h5>
			  <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			   <a href="/quienessomos" class="btn btn-primary" style="margin-left: 30%">ver más...</a>
			  </div>
			</div>
		 </div>
		 <div class="col" style="margin-top: 10px">
			  <div class="card" style="width: 18rem;">
			  <img src={!! asset('images/tecnologia.jpg') !!} class="card-img-top cardImage" alt="..." >
			  <div class="card-body">
			  <h5 class="card-title" style="text-align: center;">Servicios</h5>
			  <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			   <a href="/servicios" class="btn btn-primary" style="margin-left: 30%">ver más...</a>
			  </div>
			</div>
		 </div>
		 <div class="col" style="margin-top:10px">
			  <div class="card" style="width: 18rem;">
			  <img src={!! asset('images/redes.jpg') !!} class="card-img-top cardImage" alt="..." >
			  <div class="card-body">
			  <h5 class="card-title" style="text-align: center;">Productos</h5>
			  <p class="card-text"style="text-align: center;" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			   <a href="/productos" class="btn btn-primary" style="margin-left: 30%">ver más...</a>
			  </div>
			</div>
		 </div>	
		 <!--linea divisoria-->
         <hr width="85%" style="margin-top: 30px" />
	 </div> 

	 <!--footer-->
	 <a name="abajo"></a>
	 <div class="row contactenos" style="margin-top: 15px;">
	 	<div class="col">
	 		<p><h4 style="text-align: center;"><b><i>Contáctanos</i></b></h4></p>
	 	</div>
	    </div>
	    <div class="row  contactenos">
	 	<div class="col" style="margin-left: 70px;">
	 		<a href=https://www.facebook.com/Motobombas-y-controles-Murillo-996073263748689/><img src={!! asset('images/facebook.png') !!} class="botonSocial"></a>
	 	</div>
	 	<div class="col">
	 		<a href="https://www.instagram.com/motobombasycontroles/?hl=es-la"><img src={!! asset('images/instagram.jpg') !!} class="botonSocial"></a>
	 	</div>
	 	<div class="col">
	 		<a href="https://www.facebook.com/"><img src={!! asset('images/gmail.jpg') !!} class="botonSocial"></a>
	 	</div>
        <div class="col">
        </div>
                <div class="col">
                <p><h5><i><b>teléfonos: </b></i></h5></p>
            </div>
        <div class="col">
        	<p><h6>3333333, 3144962108, 5555555</h6></p>
            </div>
        <div class="col">
        	<p><h5><i><b>Escribenos: </b></i></h5></p>
        </div>
        <div class="col">
        	<p><h6>Universidades@hotmail.com</h6></p>
        </div>
        <div class="col"></div>
        <hr width="85%" style="margin-top: 30px" />
	 </div>
 </div>
@endsection
