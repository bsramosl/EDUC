@extends('layouts.principal')

@section('title','Contacto') 

@section('content')
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image:  url('{{ asset('img/profesor.jpg')}}');">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Nuestra Facultad</h1>								 
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url('{{ asset('img/profesor.jpg')}}');">
							<ul class="fh5co-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div>
			  
			</div>
		</div>
	</div>
 
	@endsection
