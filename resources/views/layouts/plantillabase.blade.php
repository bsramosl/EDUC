<!DOCTYPE HTML>
 
<html>
	<head>
		<title>@yield('title')</title>

		<meta charset="utf-8" />
		 <!-- Google Font: Source Sans Pro -->
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
         <!-- Font Awesome -->
         <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
         <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.css')}}">
         <!-- Ionicons -->
         <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
         <!-- Tempusdominus Bootstrap 4 -->
         <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
         <!-- iCheck -->
         <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
         <!-- JQVMap -->
         <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
         <!-- Theme style -->         
         <link rel="stylesheet"  href="{{asset('css/adminlte.min.css')}}">
         <!-- overlayScrollbars -->
         <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"> 
         @yield('css')    

	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
  
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li> 
              </ul>
          
              <!-- Right navbar links -->
              <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                  </a>
                  <div class="navbar-search-block">
                    <form class="form-inline">
                      <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                          <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                          </button>
                          <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>           
              </ul>
              
              <li class="btn-cta"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span>Salir</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              </li>	
            </nav>
            <!-- /.navbar -->
          
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="{{ route('principal.index') }}" class="brand-link">
              <i class="fa fa-users" class="brand-image img-circle elevation-3" style="opacity: .8"></i>
                <span class="brand-text font-weight-light">EDUC.</span>
              </a>
          
              <!-- Sidebar -->
              <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <!-- <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>-->
                  <div class="info">
                    <a href="#" class="d-block">@yield('usuario') 
                    </a>
                  </div>
                </div>
           
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                      <a href="{{ route('admin.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard 
                        </p>
                      </a>                     
                    </li> 
                    <li class="nav-item">
                      <a href="{{ route('tabla.listar') }} " class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                          Tablas
                          <i class="fas fa-angle-left right"></i>                          
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{ route('tabla.listar') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Usuarios</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('curso.listar') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Cursos</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('evento.listar') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Evento</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('pago.listar') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Curso Pagos</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('pagoevento.listar') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Evento Pagos</p>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="nav-header">Operaciones</li>
                     
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                          Cursos
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{ route('curso.register') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registro</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('admin.listarcurso')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Cursos Listar</p>
                          </a>
                        </li> 
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                          Eventos
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="{{ route('evento.register') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Registro</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{route('admin.listar')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Evento Listar</p>
                          </a>
                        </li> 
                      </ul>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>                 
          
            <div class="content-wrapper">
              <section class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <!-- titulo -->
                    </div> 
                  </div>
                </div> 
              </section>
              
              @yield('content')    
              
            </div>          
          </div> 
            
            <footer class="main-footer">
              <strong>Copyright &copy; 2021-2022 <a href=" ">EDUC.</a>.</strong>
              Todos los derechos reservados
              <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
              </div>
            </footer>

             
        
    

    <!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.js')}}"></script>
@yield('js')
 
	</body>
</html>