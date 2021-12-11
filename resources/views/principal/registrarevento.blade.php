  
        @extends('layouts.principal')

@section('title','Registro')

@section('content')
<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box fadeInUp animated-fast">
				<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de nuestra universidad</font></font></span>
				<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evento->nombre}}</font></font></h2>
				<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evento->descripcion}}</font></font></p>
				<div class="col-sm-6">
                <button type="submit" onclick="modalregistro();" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-lg"> Registro</button>
										  
                </div>
			</div>
			<div class="col-md-6">
				@if($evento->imagen  != ' ')
				<img class="img-responsive" src="{{ asset('img/evento').'/'. $evento->imagen}}">
				@else
				<img class="img-responsive" src="{{ asset('img/evento/evento.2.jpg') }}">
				@endif

			</div>
		</div>
	</div> 


	<div class="modal fade" id="modal-lg">
		<div class="modal-dialog " style="width:1160px;">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<div class="bootstrap-duallistbox-container row moveonselect moveondoubleclick">
									<div class="box1 col-md-7">
										<h3 style="text-align:center">{{$evento->nombre}}</h3>
										<h5 style="text-align:center;  justify-content: center; color: var(--eds-ui-600,var(--eds-ui-600,#6f7287));">
											{{$evento->fecha}}</h5>
											<div class="col-md-12" style=" text-align: justify; color: #1e0a3c;  border-bottom: 1px solid #e5e5e5;">												
												<h4 style="text-align: center;">Sobre este evento</h4>	
												<p>{{$evento->descripcion}}</p>
											</div> 									 
										<div class="col-md-12"  style="text-align: center; padding-top: 20px;" >
											@if (auth()->check())
											<button type="button" class="btn btn-primary">Finalizar Compra
											</button>
											@else
											<button type="button" class="btn btn-primary" id="registro" onclick="register();">Registrar</button>
											@endif 
										</div>

										<div class="col-md-12"  style="padding-top: 20px;" id="registrar">
											<div class="row">
												<div class="col-sm-6"> 
												  <div class="form-group">
													  <input type="text" class="form-control form-control-lg" placeholder="Nombre completo" name="nombre"
													   autocomplete="given-name">
												  </div>
												</div> 
												<div class="col-sm-6"> 
													<div class="form-group">
														<input type="text" class="form-control form-control-lg" name="email" placeholder="Direccion de correo electronico"
														 autocomplete="email">
													</div>
												  </div>
											  </div> 											   																			 
												<button type="button" class="btn btn-primary" id="regis"  >Registrar</button>
										    </div>
										
																				
									</div>
									<div class="box2 col-md-5">
										<div >
											@if($evento->imagen != ' ')
											<img class="img-responsive" src="{{ asset('img/evento').'/'. $evento->imagen}}"
											style="max-width: 345px; max-height: 226px;display:block;
											margin:auto;>">
											@else
											<img class="img-responsive" src="{{ asset('img/evento/evento.2.jpg') }}" style="max-width: 345px; max-height: 226px;display:block;
											margin:auto;">
												 
											@endif
	
										</div>
										<br>
										<p style="color: #1e0a3c;">Resumen de pedido</p>
										<div class="row col-md-12" style="border-bottom: 1px solid #e5e5e5;">
											<div class="col-md-6" style=" text-align:justify; color: #1e0a3c;">
												{{$evento->nombre}}
											</div>
											<div class="col-md-6" style="text-align: center; color: #1e0a3c;">
												${{$evento->costo}}
											</div>
										</div>
										<div class="row col-md-12" style="border-bottom: 1px solid #e5e5e5;">
											<div class="col-md-6" style="color: #1e0a3c;">
												TOTAL:
											</div>
											<div class="col-md-6" style="text-align: center; color: #1e0a3c;">
												${{$evento->costo}}
											</div>
										</div>
									</div>
								</div>
	
							</div>
							<!-- /.form-group -->
						</div>
						<!-- /.col -->
					</div> 
				</div> 
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<script>
	 
		function register(){
			document.getElementById('registrar').style.display = 'block';
			document.getElementById('registro').style.display = 'none';
		}

		function modalregistro(){
			document.getElementById('registrar').style.display = 'none';
			document.getElementById('registro').style.display = 'block';
		}
	
	</script>
@endsection
