@extends('layouts.plantillabase')

@section('title','Usuarios')


@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection
 

@section('content') 
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuario</font></font></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body"> 
          <form action="{{route('usuario.edit',$usuario->id)}}" method="post">
            @csrf  @method('PATCH')
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Full name" id="name" name="name" value="{{$usuario->name}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="{{$usuario->email}}">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>  
            <div class="input-group mb-3">
            <select  type="text" class="form-control" placeholder="Rol" id="role" name="role" value="{{$usuario->role}}">
                 <option>Seleccione</option>
                 <option value="Admin">Admin</option>
                 <option value="Profesor">Usuario</option>
               </select>                
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>  
            <div class="row">
              <div class="col-8">
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Editar</button>
                    </div>
            </div>
          </form>
     
        </div>
      </div> 
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content --> 

<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">

@if(session('usuarioModificado'))
<script>  
  Swal.fire({
              icon: 'success',
              title: ' ',
              html: '{{session('usuarioModificado')}}',
          });
</script>  

@endif


@endsection