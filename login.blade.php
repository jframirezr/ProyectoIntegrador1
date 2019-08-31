@extends('layouts.app')

 @section('head')
 <link rel="stylesheet"  href={!! asset('css/estilo.css') !!} />
 @endsection 

 @section('title', 'Inicio de sesion')

 @section('body')

 <div class="container">

 	<div class="container-fluid" style="background-color: skyblue">
 		<p><h1  style="text-align: center;">Universidad EAFIT</h1></p>
 		<p"><i><h4 style="text-align: center;">Inspira crea y transforma</h4></i></p>
 		<hr width="85%" style="margin-top: 15px" />

 	</div>

    <form style="margin-top: 8%; margin-left: 40%; margin-right: 40%;">
  <div class="form-group row">
  	        <div class="Sombras">
      <input type="text" class="form-control" height="" id="inputPassword" placeholder="Usuario">
    </div>
  </div>
  <div class="form-group row">
    <div class="Sombras">
     <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group row" style="margin-top: 25px;">
    <div>
 		<a href="/MenuPrincipal"><button type="button" style="margin-left: 70%; margin-right: 70%;" class="btn btn-dark">ingresar</button></a
    </div>
  </div>
  </div>
</form>

<div style="margin-left: 15%; margin-right: 15%; margin-top: 25px; text-align: center;">
	<p>Si no recuerda o no tiene asignado su logín por favor de clic aquí para logearse con tipo y número de documento de identidad.</p>
</div>

<hr width="85%" style="margin-top: 70px" />

 </div>

 <div style="margin-left: 15%; margin-right: 15%; margin-top: 20px; text-align: center;">
 <p style="font-size: 13px;">Los campos marcados con * son obligatorios

| Comentarios y Sugerencias | 
UNAULA: Teléfono: (57) (4) - 5112199| Dirección: Carrera 55 #49-51 | Medellín - Colombia - Suramérica 
© Copyright 2007 Universidad EAFIT ® Todos los Derechos Reservados - Unidad de Software SAI - Innovación
Fecha Actualización: 2019-06-17 r.201801</p>
</div>

 @endsection
