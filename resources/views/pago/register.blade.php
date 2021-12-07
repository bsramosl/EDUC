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
            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registro de pago</font></font></h3>
          </div>
          <form  action="{{ route('pago.save')}}" method="post">   
            @csrf  
          <div class="card-body">    
           
  
<div class="user-panel main">
<div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuario:</font></font></label>         
              <input type=" " list="users" class="form-control" id="user" placeholder="Ingrese nombre del usuario">
            </div>      
    <datalist id="users">
    @foreach($user as $use)
                   <option data-value="{{$use->id}}">{{$use->name}}</option>
                   @endforeach 
    </datalist>
    <input type="hidden" name="user_id" id="user_id">
    </div>
   
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Curso:</font></font></label>    
               <select class="form-control" id="curso_id" name="curso_id">
               <option value="">Seleccione Curso</option>
                   @foreach($curso as $cur)
                   <option value="{{$cur->id}}">{{$cur->nombre}}</option>

                   @endforeach
               </select>
            </div>       
            <input type="hidden" class="form-control"  id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>">  
            <div class="form-group">
              <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pago:</font></font></label>    
                  <input  class="form-control" id="costo" name="pago" placeholder="pago $" value="{{$cur->costo}}" readonly>    
            </div>         
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Registrar </button>
            <button type="submit" class="btn btn-default float-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cancelar</font></font></button>
          </div>
        </form>     
           
        </div>
         
      </div>
    </div>
    
  </div>
  <!-- /.container-fluid -->
</section>

<script>
      document.querySelector('div.user-panel.main input[list]').addEventListener('input', function(e) {
    var input = e.target,
        list = input.getAttribute('list'),
        options = document.querySelectorAll('#' + list + ' option'),
        hiddenInput = document.getElementById(input.getAttribute('id') + '_id'),
        label = input.value;
    hiddenInput.value = label;
    for(var i = 0; i < options.length; i++) {
        var option = options[i];
        if(option.innerText === label) {
            hiddenInput.value = option.getAttribute('data-value');
            break;
        }
    }
});
    </script>

<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">
 
@if (session('cursoguardado'))
<script>  
  Swal.fire({
              icon: 'success',
              title: ' ',
              html: '{{session("cursoguardado")}}',
          });
</script>    
    
@endif


@if ($errors->any())
@foreach ($errors->all() as $error)
<script>  
  Swal.fire({
              icon: 'error',
              title: ' ',
              html: '{{$error}}',
          });
</script>        
@endforeach
@endif



  @endsection
