@extends('layouts.plantillabase')

@section('title','Pago Evento')

@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection 
@section('content')
<section class="content">
  <div class="container-fluid">      
    <div class="row">
      <div class="col-md-2">
      </div>       
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registro de Pagos</font></font></h3>
          </div>
          <form  action="{{route('pago.edit',$pago->id)}}" method="post">   
            @csrf  @method('PATCH')
          <div class="card-body">    
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuario:</font></font></label>         
                  <input type=" " class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del usurario" value="{{$pago->user_id}}">
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descipcion:</font></font></label>    
                  <input type=" " class="form-control" id="descripcion" name="descripcion" placeholder="Curso" value="{{$pago->curso_id}}">    
            </div>             
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha:</font></font></label>
              <div class="input-group date"  >
                <input type="date" class="form-control"  id="fecha" name="fecha" value="{{$pago->fecha}}">               
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Costo:</font></font></label>    
                  <input type=" " class="form-control" id="costo" name="costo" placeholder="Costo $" value="{{$pago->pago}}">    
            </div>
         
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Registrar </button>
            <a href="{{route('pago.listar' )}}" class="btn btn-default float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelar</font></font></a>
          </div>
        </form>     
           
        </div>
         
      </div>
    </div>
    
  </div>
  <!-- /.container-fluid -->
</section>

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


<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">

@if(session('pagoguardado'))
<script>  
  Swal.fire({
              icon: 'success',
              title: ' ',
              html: '{{session('pagoguardado')}}',
          });
</script>  

@endif



  @endsection
