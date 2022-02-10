@extends('layouts.plantillabase')

@section('title','Eventos')


@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection

@section('content') 
<section class="content">
    <div class="container-fluid"> 
      <h3 class="mt-4 mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usuarios</font></font></h3>

      <div class="row">
        @foreach ($evento as $even)    
        <div class="col-md-4">
          <!-- Widget: user widget style 2 -->
          <div class="card card-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-warning">
              <div class="widget-user-image">
                @if ( $even->user->imagen  != null)
                <img class="img-circle elevation-2" style="width: 65px; height: 65px;" src="{{ asset('img/usuario').'/'. $even->user->imagen}}" alt="Foto de perfil de usuario">
                @else
                <img class="img-circle elevation-2"  src="{{ asset('img/usuario/user.png')}}" alt="Foto de perfil de usuario">
                @endif
               
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{$even->user->name}}</h3>
              <h5 class="widget-user-desc">{{$even->evento->nombre}}</h5>
            </div> 
          </div>         
        </div> 
        @endforeach      
      </div>      
    </div>
  </section>
@endsection