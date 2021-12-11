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
                </div> 
            </div>
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

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-default">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="pago">Hacer un pago con tarjeta de débito o crédito</h4> 
                    </div>
                    <div class="modal-body"> 
                        <form  action="{{ route('pago.save')}}" method="post">   
                            @csrf  
                        <div class="card">
                            <div class="card-body login-card-body"> 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                                            <input type="hidden" name="curso_id" id="curso_id" value="{{ $curso->id}}">
                                            <input type="hidden" name="fecha" id="fecha" value="<?php echo date("Y-m-d\TH-i");?>">
                                            <input type="hidden" name="pago" id="pago" value="{{$curso->costo}}">
                                        </div>
                                    </div>                                     
                                </div> 
                                 
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" autocomplete="cc-name"
                                           placeholder="N.º de la tajeta" pattern="[0-9]*">
                                        </div>
                                    </div>                                     
                                </div> 
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Vencimiento "
                                                   autocomplete="cc-exp" mask="11/11">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Codigo de Seguridad "
                                                   autocomplete="cc-csc">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Nombres "
                                                   autocomplete="given-name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Apellidos"
                                                   autocomplete="family-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">

                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-info btn-block"> Aceptar</button>
                                    </div>
                                </div>

                            </div>
                            <!-- /.login-card-body -->
                        </div>
                        </form>
                    </div> 
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

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
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@endsection
