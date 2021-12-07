  
        @extends('layouts.principal')

@section('title','Registro')

@section('content')
<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box fadeInUp animated-fast">
				<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de nuestra universidad</font></font></span>
				<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evento->nombre}}</font></font></h2>
				<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evento->descripcion}}</font></font></p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="{{ asset('img/evento').'/'. $evento->imagen}}">
			</div>
		</div>
	</div> 

@endsection
