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
                  <th style="width: 1%"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      #
                  </font></font></th>
                  <th style="width: 20%"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Nombre del proyecto
                  </font></font></th>
                  <th style="width: 30%"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Miembros del equipo
                  </font></font></th>
                  <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Progreso del proyecto
                  </font></font></th>
                  <th style="width: 8%" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                      Estado
                  </font></font></th>
                  <th style="width: 20%">
                  </th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  @foreach ($evento as $even)

                  <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    #
                </font></font></td>
                <td>
                    <a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        {{$even->nombre}}
                     </font></font></a>
                    <br>
                    <small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Creado {{$even->fecha}}
                    </font></font></small>
                </td>
                <td>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                        </li>
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                        </li>
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                        </li>
                        <li class="list-inline-item">
                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                        </li>
                    </ul>
                </td>
                <td class="project_progress">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                        </div>
                    </div>
                    <small><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        57% completo
                    </font></font></small>
                </td>
                <td class="project-state">
                    <span class="badge badge-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Éxito</font></font></span>
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                        Vista
                    </font></font></a> 
                </td>
                      
                  @endforeach
                  
              </tr> 
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>


@endsection