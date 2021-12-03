@extends('layouts.principal')

@section('title','Cursos') 

@section('content')

<aside id="fh5co-hero">
<div class="flexslider">
    <ul class="slides">
       <li style="background-image: url('{{ asset('img/img_bg_1.jpg')}}');">
           <div class="overlay-gradient"></div>
           <div class="container">
               <div class="row">
                   <div class="col-md-8 col-md-offset-2 text-center slider-text">
                       <div class="slider-text-inner">
                           <h1>El gran objetivo de la educación no es el conocimiento, sino la acción</h1>									
                            <p><a class="btn btn-primary btn-lg" href="#">Start Learning Now!</a></p>
                       </div>
                   </div>
               </div>
           </div>
       </li>
       <li style="background-image:url('{{ asset('img/img_bg_2.jpg')}}');">
           <div class="overlay-gradient"></div>
           <div class="container">
               <div class="row">
                   <div class="col-md-8 col-md-offset-2 text-center slider-text">
                       <div class="slider-text-inner">
                           <h1>Las raíces de la educación son amargas, pero el fruto es dulce</h1>									 
                            <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                       </div>
                   </div>
               </div>
           </div>
       </li>
       <li style="background-image: url('{{ asset('img/img_bg_5.jpg')}}');" >
           <div class="overlay-gradient"></div>
           <div class="container">
               <div class="row">
                   <div class="col-md-8 col-md-offset-2 text-center slider-text">
                       <div class="slider-text-inner">
                           <h1>Te ayudamos a aprender cosas nuevas</h1>								
                            <p><a class="btn btn-primary btn-lg btn-learn" href="#">Start Learning Now!</a></p>
                       </div>
                   </div>
               </div>
           </div>
       </li>		   	
      </ul>
  </div>
</aside> 

<div id="fh5co-course">
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
        <div class="col-md-6 animate-box">
        <div class="course"> 
            <div class="desc" >
                <h3 id="titulo"> {{$cur->nombre}} </h3>
                <p id="lateral" >{{$cur->descripcion}}</p>
                <p>Fecha:{{$cur->fecha}}</p>
                <a href="#" class="btn btn-primary btn-sm btn-course">Registrado</a>
            </div>
        </div>
    </div></td>
</tr>     
@endif 
@endforeach
@if ($i==0)
<tr>
    <td>
        <div class="col-md-6 animate-box">
        <div class="course"> 
            <div class="desc" >
                <h3 id="titulo"> {{$cur->nombre}} </h3>
                <p id="lateral" >{{$cur->descripcion}}</p>
                <p>Fecha:{{$cur->fecha}}</p>
                <a href="{{ route('principal.regcurso',$cur->id)}}" class="btn btn-primary btn-sm btn-course">Take A Course</a>
            </div>
        </div>
    </div></td>
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
        max-width: 230px;			
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;}

    #titulo{
        width: 230px;			
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    } 
 
    </style> 
@endsection


 