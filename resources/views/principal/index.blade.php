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
            <h2>Categorias del Curso</h2>					 
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
                    <i class="fa fa-bullhorn"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Practica de habilidades</a></h3>
                    <p>Realizarás actividades de desarrollo de competencias directivas específicas en cada área temática.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-flask"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Tecnologia científica</a></h3>
                    <p>Desarrollamos actividades como: Bootcamps, hackathones, concursos, eventos y ferias de ciencia, tecnología, innovación y afines.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-picture-o"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Contenido Creativo</a></h3>
                    <p>Desarrollamos campañas y contenidos que te permiten llegar a tu grupo objetivo.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 text-center animate-box">
            <div class="services">
                <span class="icon">
                    <i class="fa fa-film"></i>
                </span>
                <div class="desc">
                    <h3><a href="#">Material de estudio</a></h3>
                    <p>Todos los contenidos didácticos son creados por los especialistas que van a impartir el curso, específicamente para él, de manera que el desarrollo didáctico sea realmente específico y concreto.</p>
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

<div id="fh5co-counter" class="fh5co-counters" style="background-image: url('{{ asset('img/img_bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <span class="icon"><i class="fa fa-globe"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Foreign Followers</span>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <span class="icon"><i class="fa fa-group"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Students Enrolled</span>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <span class="icon"><i class="fa fa-lightbulb"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Classes Complete</span>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Certified Teachers</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="fh5co-course">
<div class="container">
    <div class="row animate-box">
        <div class="col-md-5 col-md-offset-3 text-center fh5co-heading">
            <h2>Nuestros Cursos</h2>
            <p>Nuestro programa de especialización impulsará tus competencias hasta el más alto nivel profesional, con la actualización en las últimas técnicas y planteamientos a nivel empresarial”</p>
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
            <h2><span>Testimonials</span></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-fullwidth">
                    <div class="item">
                        <div class="testimony-slide active text-center">
                            <div class="user" style="background-image: url('{{ asset('img/img_bg_3.jpg')}}');"></div>
                            <span>Mary Walker<br><small>Students</small></span>
                            <blockquote>
                                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-slide active text-center">
                            <div class="user" style="background-image: url('{{ asset('img/img_bg_3.jpg')}}');"></div>
                            <span>Mike Smith<br><small>Students</small></span>
                            <blockquote>
                                <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-slide active text-center">
                            <div class="user" style="background-image: url('{{ asset('img/img_bg_3.jpg')}}');"></div>
                            <span>Rita Jones<br><small>Teacher</small></span>
                            <blockquote>
                                <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
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
        <div class="col-md-4 animate-box">
            <div class="fh5co-event">
                <div class="date text-center"><span>{{$even->fecha}}<br>  </span></div>
                <h3><a href="#">{{$even->nombre}}</a></h3>
                <p>{{$even->descripcion}}</p>
                <p><a href="#">Read More</a></p>
            </div>
        </div>	
        @endforeach			 
        <div class="col-md-4 animate-box">
            <div class="fh5co-event">
                <div class="date text-center"><span>15<br>Mar.</span></div>
                <h3><a href="#">New Device Develope by Microsoft</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#">Read More</a></p>
            </div>
        </div>
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
