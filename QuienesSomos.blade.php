@extends('layouts.app')

@section('head')
<link rel="stylesheet"  href={!! asset('css/estilo.css') !!} />
@endsection

@section('title', '¿Quiénes somos?')
 
@section('body')
  <!-- Contenedor principal -->
 <div class="cotainer-fluid">
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
				      <a class="nav-item nav-link" href="/MenuPrincipal"><h6 class="texto">Inicio</h6><span class="sr-only">(current)</span></a>
				      <a class="nav-item nav-link" href="/Consultas"><h6 class="activo">Consultas</h6></a>
				      <a class="nav-item nav-link" href=" "><h6 class="texto">Matriculas</h6></a>
				      <a class="nav-item nav-link" href="/Solicitudes"><h6 class="texto">Solicitudes</h6></a>
				      <a class="nav-item nav-link" href="#abajo"><h6 class="texto">Contáctenos</h6></a>
				</div>
			 </div>
			</nav>
		</div>
	</div>
	 <!--Quienes somos-->
      <div class="row" style="margin-top:10px;">
      	<div class="col-5">
      		 <img src={!! asset('images/tecnologia.jpg') !!} class="d-block w-100" alt="..." style="height: 350px">
      	</div>
      	<!--descripcion-->
		<div class="col" style="background-color: rgb(220,220,220); text-align: center;">

            <p style="margin-top:80px"><h1><i><b>¿Quiénes somos?</b></i></h1></p>
		    <p style="margin-top: 10px;"><i>La expresión transparente en este artículo no está relacionada con el valor “transparent” de las propiedades que admiten un color como valor (background-color, color), sino con los conceptos opaco, transparente y traslúcido: la posibilidad de un objeto para dejar pasar la luz (ver a través de él) o no y el grado en que lo hace. </i></p>
		</div>
      </div>
      <hr width="85%" style="margin-top: 30px" />

      <!--Mision-->
      <div class="row" style="margin-top: 30px;">
      	<div class="col" style="background-color: rgb(220,220,220); text-align: center;">

            <p style="margin-top:80px"><h1><i><b>¿Misión?</b></i></h1></p>
		    <p style="margin-top: 10px;"><i>La expresión transparente en este artículo no está relacionada con el valor “transparent” de las propiedades que admiten un color como valor (background-color, color), sino con los conceptos opaco, transparente y traslúcido: la posibilidad de un objeto para dejar pasar la luz (ver a través de él) o no y el grado en que lo hace. </i></p>
		</div>
		<div class="col-5">
      		 <img src={!! asset('images/redes.jpg') !!} class="d-block w-100" alt="..." style="height: 350px">
      	</div>
      </div>
      <hr width="85%" style="margin-top: 30px" />

      <!--Visión-->
      <div class="row" style="margin-top:30px;">
      	<div class="col-5">
      		 <img src={!! asset('images/motor.jpg') !!} class="d-block w-100" alt="..." style="height: 350px">
      	</div>
      	<div class="col" style="background-color: rgb(220,220,220); text-align: center;">

            <p style="margin-top:80px"><h1><i><b>¿Visión?</b></i></h1></p>
		    <p style="margin-top: 10px;"><i>La expresión transparente en este artículo no está relacionada con el valor “transparent” de las propiedades que admiten un color como valor (background-color, color), sino con los conceptos opaco, transparente y traslúcido: la posibilidad de un objeto para dejar pasar la luz (ver a través de él) o no y el grado en que lo hace. </i></p>
		</div>
      </div>
      <hr width="85%" style="margin-top: 30px" />
	 <!--footer-->
	 <a name="abajo"></a>
	 <div class="row contactenos" style="margin-top: 30px;">
	 	<div class="col">
	 		<p><h4 style="text-align: center;"><b><i>Contáctanos</i></b></h4></p>
	 	</div>
	    </div>
	    <div class="row  contactenos">
	 	<div class="col" style="margin-left: 70px;">
	 		<a href="https://www.facebook.com/"><img src={!! asset('images/facebook.png') !!} class="botonSocial"></a>
	 	</div>
	 	<div class="col">
	 		<a href="https://www.facebook.com/"><img src={!! asset('images/instagram.jpg') !!} class="botonSocial"></a>
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
        	<p><h6>MotobombasMurillito@hotmail.com</h6></p>
        </div>
        <div class="col"></div>
        <hr width="85%" style="margin-top: 30px" />
	 </div>  
 </div>

@endsection
