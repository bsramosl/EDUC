<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title> 

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

	<!-- fontawesome.css -->
	<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.css')}}">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
 
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{asset('css/pricing.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('js/respond.min.js')}}"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">		
						<ul class="fh5co-social">							 
							<li><a href="https://www.facebook.com/corpciti/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/corpciti"><i class="fa fa-twitter"></i></a></li>
						    <li><a href="https://ec.linkedin.com/company/corpciti"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCqmn1QdJfk26AAwzJLuh1XA"><i class="fa fa-youtube"></i></a></li>
							 
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{ route('principal.index') }}"> <img style="width: 70px; height: 60px;" src="{{ asset('img/logo-web-2018-2.png')}}"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1"> 
						<ul>
							<li class="active"><a href="{{ route('principal.index') }}">Home</a></li>												 
							@if (auth()->check())
							<li><a href="{{ route('principal.curso',auth()->user()->id)}}">Cursos</a></li>
							<li><a href="{{route('principal.evento')}}">Evento</a></li>							
							<li><a href="{{ route('principal.learning',auth()->user()->id)}}">Learninig</a></li>
 
							<li class="has-dropdown">                             
								<a>{{ Auth::user()->name }}</a>
								<ul class="dropdown">
									<li><a href="{{route('principal.perfil',auth()->user()->id)}}" style="font-size: large">Perfil</a></li>
									@if (auth()->user()->role == 'admin')
									<li><a href="{{route('admin.index')}}" style="font-size: large">Dashboard</a></li>										
									@endif									
								</ul>
							</li>	
							<li class="btn-cta"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span>Salir</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              </li>					
							@else
							<li><a href="{{route('principal.cursos')}}">Cursos</a></li>
							<li><a href="{{route('principal.evento')}}">Evento</a></li> 
							<li class="btn-cta"><a href="{{ route('login') }}"><span>Acceso</span></a></li>
							<li class="btn-cta"><a href="{{ route('register') }}"><span>Registro</span></a></li>															
							@endif						 
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

    @yield('content')    


	<footer id="fh5co-footer" role="contentinfo" style="background-image: url('{{ asset('img/img_bg_4.jpg')}}');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>	 
					</ul>
				</div>

				 

				 
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2021. All Rights Reserved.</small> 
				
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	<!-- Count Down -->
	<script src="{{asset('js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('js/main.js')}}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

