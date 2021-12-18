@extends('layouts.principal')

@section('title','Registro')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <div class="field-item even"><h2>{{$curso->nombre}}</h2>
                <p>{{$curso->descripcion}}  </p>               
                <h4><a href="{{$curso->link}}">Link web</a></h4>
               
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
                    <i class="fa fa-sitemap fa-3x"></i>
                    <h3 style="float: right; margin: 10px;" ;><p href="#"><font style="vertical-align: middle;">Nivel:
                        {{$curso->nivel}}</font></p></h3>
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
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@endsection
