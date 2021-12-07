@extends('layouts.plantillabase')

@section('title','Evento')

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
            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edicion de eventos</font></font></h3>
          </div>
          <form  action="{{route('evento.edit',$evento->id)}}" method="post" enctype="multipart/form-data">   
            @csrf  @method('PATCH')
          <div class="card-body">    
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre:</font></font></label>         
                  <input type=" " class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del curso" value="{{$evento->nombre}}">
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descipcion:</font></font></label>    
                  <input type=" " class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="{{$evento->descripcion}}">    
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Localizacion:</font></font></label>    
                  <input type=" " class="form-control" id="descripcion" name="localizacion" placeholder="Ubicacion" value="{{$evento->descripcion}}">    
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Localizacion:</font></font></label>    
              <input type="file" class="form-control" name="imagen" placeholder="Imagen" value="{{$evento->imagen}}">
            </div>                       
           
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha:</font></font></label>
              <div class="input-group date"  >
                <input type="date" class="form-control"  id="fecha" name="fecha" value="{{$evento->fecha}}">               
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Costo:</font></font></label>    
                  <input type="number" min="1" pattern="^[0-9]+" class="form-control" id="costo" name="costo" placeholder="Costo $" value="{{$evento->costo}}">    
            </div>
         
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Registrar </button>
            <a href="{{route('evento.listar' )}}" class="btn btn-default float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelar</font></font></a>
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


@if (session('Eventoguardado'))
<script>  
  Swal.fire({
              icon: 'success',
              title: ' ',
              html: '{{session('Eventoguardado')}}',
          });
</script>    
    
@endif 



  @endsection
