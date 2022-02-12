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

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Reciente</h3> 
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                  <div class="product-img">
                    <!-- <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50"> -->
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Curso Mas Visto
                      @foreach ($pagcurso as $pagc)
                      <span class="badge badge-warning float-right">{{$pagc->pagos_count}}</span></a>
                      <span class="product-description" style=" max-width: 450px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                        {{$pagc->nombre}}
                     </span> 
                      @break                 
                      @endforeach  
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <!-- <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50"> -->
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Curso Menos Visto
                      @foreach ($mencurso as $pagc)
                      <span class="badge badge-warning float-right">{{$pagc->pagos_count}}</span></a>
                      <span class="product-description" style=" max-width: 450px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                        {{$pagc->nombre}}
                     </span> 
                      @break                 
                      @endforeach  
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <!-- <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50"> -->
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">
                      Evento Mas Visto 
                      @foreach ($pagevento as $pagev)
                      <span class="badge badge-warning float-right">{{$pagev->pagoeventos_count}}</span></a>
                      <span class="product-description" style=" max-width: 450px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                        {{$pagev->nombre}}
                     </span> 
                      @break                 
                      @endforeach 
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <!-- <img src="dist/img/default-150x150.png" alt="Product Image" class="img-size-50"> -->
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Evento Menos Visto
                      @foreach ($menosvento as $meneve)
                      <span class="badge badge-warning float-right">{{$meneve->pagoeventos_count}}</span></a>
                      <span class="product-description" style=" max-width: 450px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">
                        {{$meneve->nombre}}
                     </span> 
                      @break                 
                      @endforeach 
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.card-body --> 
          </div> 
        </div>      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
