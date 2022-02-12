@extends('layouts.principal')

@section('title','Inicio') 

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
                           @if (auth()->check())								  
                           @else
                           <p><a class="btn btn-primary btn-lg" href="{{ route('register') }}">¡Comienza a aprender ahora!</a></p>									   
                           @endif
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
                           @if (auth()->check())								  
                           @else
                           <p><a class="btn btn-primary btn-lg" href="{{ route('register') }}">¡Comienza a aprender ahora!</a></p>									   
                           @endif
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
                           @if (auth()->check())								  
                           @else
                           <p><a class="btn btn-primary btn-lg" href="{{ route('register') }}">¡Comienza a aprender ahora!</a></p>									   
                           @endif
                       </div>
                   </div>
               </div>
           </div>
       </li>		   	
      </ul>
  </div>
</aside>

<div id="fh5co-course-categories">
<div class="container">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2>NUESTROS SERVICIOS </h2>					 
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-building-o"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Business</a></h3>
                    <p>Desarrollamos proyectos de ciencia, tecnología, innovación, con profesionales con experiencia en varias ramas del conocimiento.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-heart-o"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Impulso</a></h3>
                    <p>Te brindamos la oportunidad de tomar las riendas de tu futuro y desarrollar todo tu potencial.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-lightbulb-o"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Consultorías</a></h3>
                    <p>Desarrollamos proyectos de ciencia, tecnología, innovación, con profesionales con experiencia en varias ramas del conocimiento.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-flask"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Pre-Incubación</a></h3>
                    <p>Creación de ideas de negocio, identificación de la oportunidad, validación, modelo de negocio, estructura de un plan de negocio.  </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-pencil-square-o"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Capacitaciones</a></h3>
                    <p>Actualización de conocimientos mediante talleres, cursos, seminarios, encuentros, en las ramas de las ciencia, tecnología, innovación y afines</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-grav"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Concursos Y Eventos</a></h3>
                    <p>Desarrollamos actividades como: Bootcamps, hackathones, concursos, eventos y ferias de ciencia, tecnología, innovación y afines</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-comments-o"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Exelencia</a></h3>
                    <p>Ponemos a tu alcance la mejor metodología de aprendizaje online. </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-laptop"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Web &amp; Programming</a></h3>
                    <p>Actualización de conocimientos mediante talleres, cursos, seminarios, encuentros, en las ramas de las ciencia, tecnología, innovación y afines.</p>
                </div>
            </div>
        </div>
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


<div id="fh5co-testimonial" style="background-image: url('{{ asset('img/school.jpg')}}');">
<div class="overlay"></div>
<div class="container">
    <div class="row animate-box">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
            <h2><span>LA CORPORACIÓN</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-fullwidth">
                    <div class="item">
                        <div class="testimony-slide active text-center">
                            <div class="user" style="background-image: url('{{ asset('img/img_bg_3.jpg')}}');"></div>
                            <span style="font-size:50px;">MISIÓN</span>
                            <blockquote>
                                <p>&ldquo;Impulsar el desarrollo y progreso del Ecuador, a través de actividades/proyectos de ciencia, tecnología e innovación sinérgicamente con los actores del ecosistema de ciencia, tecnología e innovación del país, es decir con la acedemia, sector productivo, sector público y sector social.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-slide active text-center">
                            <div class="user" style="background-image: url('{{ asset('img/img_bg_3.jpg')}}');"></div>
                            <span style="font-size:50px;">VISIÓN</span>
                            <blockquote>
                                <p>&ldquo;Dentro de los próximos 5 años nos proyectamos como la comunidad de ciencia, tecnología e innovación más grande del país, líder y referente del progreso y desarrollo a través de la creatividad y el conocimiento de los ecuatorianos.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="fh5co-blog">
<div class="container">
    <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Blog &amp; Events</h2>
        </div>
    </div>
    <div class="row row-padded-mb">
    @foreach($evento as $even)  
    @if (date("Y-m-d") > $even->fecha) 
    @else
    <div class="col-md-4 animate-box">
        <div class="fh5co-event">
            <div class="date text-center"><span>{{$even->fecha}}<br>  </span></div>
            <h3><a href="#">{{$even->nombre}}</a></h3>
            <p>{{$even->descripcion}}</p>
            <p><a href="#">Read More</a></p>
        </div>
    </div>	        
    @endif   
        @endforeach			 
    </div>
</div>
</div> 
<div id="fh5co-register" style="background-image: url('{{ asset('img/img_bg_3.jpg')}}');">
<div class="overlay"></div>
<div class="row">
    <div class="col-md-8 col-md-offset-2 animate-box">
        <div class="date-counter text-center">
            <h2>Obtenga 400 de cursos en línea gratis</h2>
            <h3> </h3>
            <div class="simply-countdown simply-countdown-one"></div>
            <p><strong>Oferta limitada, ¡apúrate!</strong></p>
            @if (auth()->check())								  
                           @else
                           <p><a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-reg">¡REGISTRATE AHORA!</a></p>
                           @endif
            
        </div>
    </div>
</div>
</div> 

@endsection
