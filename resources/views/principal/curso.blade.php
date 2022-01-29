@extends('layouts.principal')

@section('title','Cursos') 

@section('content')
 

<div id="">
<div class="container">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2>Nuestros Cursos</h2>
            <p>Nuestro programa de especialización impulsará tus competencias hasta el más alto nivel profesional, con la actualización en las últimas técnicas y planteamientos a nivel empresarial”</p>
        </div>
    </div>
    <div class="row">

        @if ($curso != ' ' )
        @php
$i = 0
@endphp
@foreach ($curso as $cur)
@foreach ($pago as $pag)
@if ($cur->id == $pag->curso_id)
@php
$i = 1
@endphp
<tr>
    <td>
    <div class="col-md-4">
  <div class="card-container"> 
    <h3> {{$cur->nombre}}</h3>
    <h6>Fecha:{{$cur->fecha}}</h6>
    <p id="lateral" >{{$cur->descripcion}}</p>
    <div class="buttons"> 
    <a href="{{ route('principal.infocurso',$cur->id) }}" class="btn btn-primary btn-sm btn-course">Registrado</a>
    </div>
    <div class="skills">        
    </div>
  </div>

</div> 
 </td>
</tr>     
@endif 
@endforeach
@if ($i==0)
<tr>
    <td>
    <div class="col-md-4">
  <div class="card-container"> 
    <h3> {{$cur->nombre}}</h3>
    <h6>Fecha:{{$cur->fecha}}</h6>
    <p id="lateral" >{{$cur->descripcion}}</p>
    <div class="buttons"> 
    <a href="{{ route('principal.regcurso',$cur->id)}}" class="btn btn-primary btn-sm btn-course">Take A Course</a>
    </div>
    <div class="skills">        
    </div>
  </div>

</div>
        </td>
</tr>   
@endif
@php
$i = 0
@endphp    
@endforeach                
        @else
            <h1>No existen cursos actualmente disponibles</h1>      
        @endif       
    </div>
</div>
</div>

<style>
    #lateral {
        max-width: 260px;			
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;}

    #titulo{
        width: 230px;			
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    } 
     
@import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	 
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 100vh;
	margin: 0;
}

h3 {
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
  background-color: #d6e8e9; 
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #1b1d25;
	padding-top: 30px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
  margin-bottom: 30px;
}

.card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
}

.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
}

button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #1F1A36;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}
 
</style>
@endsection


 