@extends('layouts.principal')

@section('title','Registro')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <div class="field-item even"><h2>{{$curso->nombre}}</h2>
                <p>{{$curso->descripcion}}  </p>
                <p><strong>Aprenderá estas habilidades fundamentales:</strong></p>
                <ul style="margin-bottom:20px;">
                    <li>Cree cuentas de Facebook, LinkedIn y YouTube.</li>
                    <li>Comprenda las redes informáticas y cómo navegar y buscar en Internet.</li>
                    <li>Familiarícese con Microsoft Windows y cómo trabajar con archivos y carpetas.</li>
                    <li>Identifique problemas comunes e implemente soluciones.</li>
                </ul>
                <!--
                <div class="donation-options mobile-hidden">
                    <div>
                        <a type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">  
                            PayPal<br>
                            <img src="{{ asset('img/paypal.png')}}">
                        </a>
                    </div> 
                    <div>
                        <a type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                            Tarjeta de Credito
                        </font></font><br>
                            <img src="{{ asset('img/targeta.png')}}" alt=""
                                 style="max-width: 125px; max-height: 125px;">
                        </a>
                    </div>
                </div> -->
            </div>
            <div id="paypal-button-container"></div>
 
        </div>
        
<div class="col-lg-4 col-md-5">
    <ul style="list-style:none">
        <li>
            <div style="width: 100%; margin: 20px auto;">
                <span style="float: left; margin-right: 15px;">
                    <i class="fa fa-clock-o fa-3x"></i>
                    <h3 style="float: right; margin: 10px;" ;><p href="#"><font style="vertical-align: middle;">Longitud: {{$curso->longitud}} horas</font></p></h3>
                </span>
            </div>
        </li>
        <li>
            <div style="width: 100%; margin: 20px auto;">
                <span style="float: left; margin-right: 15px;">
                    <i class="fa fa-money fa-3x"></i>
                    <h3 style="float: right; margin: 10px;" ;><p href="#"><font style="vertical-align: middle;">Costo:
                        {{$curso->costo}}</font></p></h3>
                </span>
            </div>
        </li>
        <li>
            <div style="width: 100%; margin: 20px auto;">
                <span style="float: left; margin-right: 15px;">
                    <i class="fa fa-sitemap fa-3x"></i>
                    <h3 style="float: right; margin: 10px;" ;><p href="#"><font style="vertical-align: middle;">Nivel: {{$curso->nivel}}
                    </font></p></h3>
                </span>
            </div>
        </li>
    </ul>

</div>


    </div>
</div> 

      
<style>
    .donation-options, .sponsors {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        text-align: center;
        max-width: 100%;
        margin: auto;
        font-size: 1.25em;
    }
</style>
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">


@if ($errors->any())
@foreach ($errors->all() as $error)
<script>  
  Swal.fire({
              icon: 'success',
              title: ' ',
              html: '{{$error}}',
          });
</script>        
@endforeach
@endif
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->

<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    function envio(){   
            $.ajax({
                url: "{{ route('postSubmit') }}",
                type: 'POST',
                dataType: "json",
                data: {
                    _token: '{{csrf_token()}}',
                    user_id:'{{auth()->user()->id}}', 
                    curso_id:'{{ $curso->id}}', 
                    fecha: '<?php echo date("Y-m-d\TH-i");?>', 
                    pago: '{{$curso->costo}}',
                },
                success: function(data) {                   
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
            value:'{{$curso->costo}}'
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
