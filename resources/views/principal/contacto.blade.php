@extends('layouts.principal')

@section('title','Contacto') 

@section('content')
 	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url('{{ asset('img/contacto.jpg')}}');">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Contact us</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Información del contacto</h3>
						<ul>
						<li><span class="fa-li"><i class="fa fa-map-marker"></i></span>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><span class="fa-li"><i class="fa fa-phone"></i></span><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><span class="fa-li"><i class="fa fa-envelope-o"></i></span><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><span class="fa-li"><i class="fa fa-globe"></i></span><a href="http://freehtml5.co">freeHTML5.co</a></li>

						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Ponerse en contacto</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Nombre">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Apellido">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Email">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Mensaje">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Di algo sobre nosotros"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div> 
	@endsection

