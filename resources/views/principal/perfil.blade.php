@extends('layouts.principal')

@section('title','Cursos') 
<link rel="stylesheet"  href="{{asset('css/adminlte.min.css')}}">

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">  
            <div class="text-center">
            @if ( $usuario->imagen  != ' ')
            <img class="profile-user-img img-fluid img-circle" style="width: 100px; height: 100px;" src="{{ asset('img/usuario').'/'. $usuario->imagen}}" alt="Foto de perfil de usuario">
            @else
            <img class="profile-user-img img-fluid img-circle" style="width: 100px; height: 100px;" src="{{ asset('img/user.png')}}" alt="Foto de perfil de usuario">

            @endif
              
            </div>

            <h3 class="profile-username text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ auth()->user()->name}}</font></font></h3>

            <p class="text-muted text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ auth()->user()->titulo}}</font></font></p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre mí</font></font></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <strong><i class="fas fa-book mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Educación</font></font></strong>

            <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            {{$usuario->educacion}}
            </font></font></p>

            <hr>

             
            <strong><i class="fas fa-pencil-alt mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Habilidades</font></font></strong>
            <p class="text-muted">
                {{$usuario->habilidades}}
            </p>
         </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perfil</font></font></a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ajustes</font></font></a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="col-md-6"> 
                    <h5 >{{$usuario->name}}</h5>
                    <div>Educ. ID: 52600782</div>
                    <div>Correo electrónico: {{$usuario->email}} </div>                  
                </div>              
              </div>
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="{{route('usuario.edit',$usuario->id)}}" method="post" enctype="multipart/form-data">
                    @csrf  @method('PATCH') 
                      <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input   class="form-control"  name="name" placeholder="Nombre" value="{{$usuario->name}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" placeholder="Email" value="{{$usuario->email}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="titulo" placeholder="Titulo" value="{{$usuario->titulo}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Habilidades</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="habilidades" placeholder="Habilidades" value="{{$usuario->habilidades}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Educacion</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="educacion" placeholder="Educacion" value="{{$usuario->educacion}}">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Imagen</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="imagen" placeholder="Imagen" value="{{$usuario->educacion}}">
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Guardar</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
 
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






