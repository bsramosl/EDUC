@extends('layouts.plantillabase')

@section('title','Cursos')

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
            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registro de cursos</font></font></h3>
          </div>
          <form  action="{{route('curso.edit',$curso->id)}}" method="post">   
            @csrf  @method('PATCH')
          <div class="card-body">    
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre:</font></font></label>         
                  <input type=" " class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del curso" value="{{$curso->nombre}}">
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descipcion:</font></font></label>    
                  <input class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="{{$curso->descripcion}}">    
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Longtud:</font></font></label>    
                  <input type="number" min="1" pattern="^[0-9]+" class="form-control" id="longitud" name="longitud" placeholder="Longitud horas" value="{{$curso->longitud}}">    
            </div> 
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nivel:</font></font></label>    
               <select class="form-control" id="nivel" name="nivel" placeholder="Nivel">
                 <option>Seleccione</option>
                 <option value="Basico">Basico</option>
                 <option value="Intermedio">Intermedio</option>
                 <option Value="Avanzado">Avanzado</option>
               </select>                
            </div> 
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Link:</font></font></label>     
              <input  class="form-control" id="link" name="link" placeholder="Link web" value="{{$curso->link}}">                 
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha:</font></font></label>
              <div class="input-group date"  >
                <input type="date" class="form-control"  id="fecha" name="fecha" value="{{$curso->fecha}}">               
            </div>
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Costo:</font></font></label>    
                  <input type=" " class="form-control" id="costo" name="costo" placeholder="Costo $" value="{{$curso->costo}}">    
            </div>
         
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Registrar </button>
            <a href="{{route('curso.listar' )}}" class="btn btn-default float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelar</font></font></a>
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

@if(session('cursoguardado'))
<script>  
  Swal.fire({
              icon: 'success',
              title: ' ',
              html: '{{session('cursoguardado')}}',
          });
</script>  

@endif


  @endsection
