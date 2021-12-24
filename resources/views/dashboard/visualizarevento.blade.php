@extends('layouts.plantillabase')

@section('title','Eventos')


@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection

@section('content') 
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Eventos</font></font></h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">#</th>
                  <th style="width: 20%">Nombre del Evento</th>
                  <th style="width: 30%">Descripcion</th>
                  <th style="width: 10%">Creado</th> 
                  <th style="width: 10%" class="text-center"> stado</th>
                  <th style="width: 10%">Opciones </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($evento as $even)
              <tr> 
                  <td>#</td>
                <td>
                    <a> {{$even->nombre}}   </a> 
                </td>
                <td>
                    {{$even->descripcion}}
                </td> 
                <td>
                    {{$even->fecha}}
                </td> 
                <td class="project-state">
                    @if (date("Y-m-d") > $even->fecha) 
                    <span class="badge badge-success"> Terminado </span>
                    @else
                    <span class="badge badge-success"> Activo </span>
                    @endif
                    
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Vista
                    </font></font></a> 
                </td> 
              </tr>
              @endforeach 
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>


@endsection