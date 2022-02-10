  
@extends('layouts.principal')

@section('title','Eventos')

@section('content')
<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box fadeInUp animated-fast">
				<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Acerca de nuestra universidad</font></font></span>
				<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evento->nombre}}</font></font></h2>
				<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$evento->descripcion}}</font></font></p>
				<div class="col-sm-6">
					@if (auth()->check())
					<button type="submit"  class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-lg"> Registro</button>						
					@else
					<a class="btn btn-info btn-block" href="{{ route('register') }}">Registro</a> 
					@endif
                
										  
                </div>
			</div>
			<div class="col-md-6">
				@if($evento->imagen  != null)
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
											<div id="paypal-button-container"></div>  
										</div> 
																				
									</div>
									<div class="box2 col-md-5">
										<div >
											@if($evento->imagen != null)
											<img class="img-responsive" src="{{ asset('img/evento').'/'. $evento->imagen}}"
											style="max-width: 345px; max-height: 226px;display:block;
											margin:auto;">
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
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">

<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    function envio(){        
		console.log
            
            $.ajax({
                url: "{{ route('evepostSubmit') }}",
                type: 'POST',
                dataType: "json",
                data: {
                    _token: '{{csrf_token()}}', 
                    fecha: '<?php echo date("Y-m-d\TH-i");?>', 
                    pago: '{{$evento->costo}}', 
					user_id:'{{auth()->user()->id}}', 
                    evento_id:'{{ $evento->id}}', 
                },
                success: function(data) {
                    // log response into console
                    console.log(data);
                }
            });

    } 
    paypal.Buttons({        
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
          application_context:{
              shipping_preference: "NO_SHIPPING"
          }, 
           
        purchase_units: [{
          amount: {
            value:'{{$evento->costo}}'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) { 
          envio(); 
        Swal.fire({
              icon: 'success',
              title: ' ',
              html: 'Tansaccion completa '+ details.payer.name.given_name,
          });
        document.getElementById('paypal-button-container').style.display = 'none';   
		location.replace("{{ route('principal.learning',auth()->user()->id) }}");     
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.

</script>
@endsection
