@extends('layouts.plantillabase')

@section('title','Inicio')

@section('usuario')

<b>{{auth()->user()->name }}</b>

@endsection

@section('content')

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$user}}</h3>
                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="#" class="small-box-footer">Mas informacion<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$curso}}</h3>

                <p>Cursos</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$evento}}</h3>

                <p>Eventos</p>
              </div>
              <div class="icon">
                <i class="fa fa-bell-o"></i>
              </div>
              <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>

        <div class="row">
          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Cursos</h3>
                <h5 class="widget-user-desc">Mas Vistos</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  @foreach ($pagcurso as $pagc)
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      {{$pagc->nombre}} <span class="float-right badge bg-primary">{{$pagc->pagos_count}}</span>
                    </a>
                  </li>                      
                  @endforeach               
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div> 

          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Cursos</h3>
                <h5 class="widget-user-desc">Mas Vistos</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  @foreach ($pagevento as $page)
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      {{$page->nombre}} <span class="float-right badge bg-primary">{{$page->pagoeventos_count}}</span>
                    </a>
                  </li>                      
                  @endforeach               
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div> 
        </div>      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
