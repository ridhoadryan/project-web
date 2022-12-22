<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Informatika | {{$title}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> --}}
      
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{route('homepage')}}" class="nav-link">Home</a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->
      
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="{{route('homepage')}}" class="brand-link">
            <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Informatika</span>
          </a>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
              </div>
            </div>
      
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="{{route('admin.dashboard')}}" class="nav-link {{Route::is('admin.dashboard') ? 'active' : null}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                {{-- Manajemen --}}
                <li class="nav-item">
                  <a href="#" class="nav-link {{Route::is(['admin.dosen.*', 'admin.matakuliah.*']) ? 'active' : null}}">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                      Manajemen
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item {{Route::is('admin.dosen.*') ? 'active' : null}}">
                      <a href="{{route('admin.dosen.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dosen</p>
                      </a>
                    </li>
                    <li class="nav-item {{Route::is('admin.matakuliah.*') ? 'active' : null}}">
                      <a href="{{route('admin.matakuliah.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mata Kuliah</p>
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
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0">{{$title}}</h1>
                    </div>
                    @if (!Route::is('admin.dashboard'))
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    @if (Route::is('admin.' . Str::replace(' ', '', Str::lower($title)) . '.index'))
                                        <span>{{$title}}</span>
                                    @else
                                        <a href="{{route('admin.' . Str::replace(' ', '', Str::lower($title)) . '.index')}}">{{$title}}</a>
                                        <li class="breadcrumb-item active">{{$curr}}</li>
                                    @endif
                                </li>
                            </ol>
                        </div>
                    @endif
                </div>
                </div>
            </div>
        
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                @yield('content')
                </div>
            </section>
        </div>

        <footer class="main-footer">
          <strong>Copyright &copy; 2022 Informatika.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
          </div>
        </footer>
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      
      <!-- jQuery -->
      <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- ChartJS -->
      <script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
      <!-- Sparkline -->
      <script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
      <!-- JQVMap -->
      <script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
      <script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
      <!-- daterangepicker -->
      <script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
      <script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
      <!-- Summernote -->
      <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
      <!-- overlayScrollbars -->
      <script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ asset('backend/dist/js/demo.js') }}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
      </body>
      </html>
      