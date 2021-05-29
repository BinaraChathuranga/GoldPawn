<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Golden Pawn | Dashboard</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link" style="margin-left: 900px;">Home</a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{asset('/img/logoo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold" style="color: goldenrod; font-weight: bold; ">GOLDEN PAWN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
           <img src="{{asset('/img/logoo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>  -->
        <div class="info">
          <a href="#" class="d-block text-uppercase" style="font-weight: bold; font-size: large; margin-left: 75px;">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Transactions
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('home.completedTransactions.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-success"></i>
                      <p>Completed Transactions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('home.renewTransactions.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon text-warning"></i>
                      <p>Renewed Transactions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/warning1" class="nav-link">
                    <i class="nav-icon far fa-envelope text-secondary"></i>
                      <p>1st Warning Transactions</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/warning2" class="nav-link">
                    <i class="nav-icon far fa-envelope text-primary"></i>
                      <p>2nd Warning Transactions</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/warning3" class="nav-link">
                    <i class="nav-icon far fa-envelope text-danger"></i>
                      <p>3rd Warning Transactions</p>
                    </a>
                  </li>
                </ul>
              </li>
          

           
             
          <li class="nav-item">
            <a href="{{route('home.articles.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Articles
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('home.ledger.index')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Ledger
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/AdminRegister" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Admin Register
               
              </p>
            </a>
          </li>
          
          
          
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/incomeReport" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Income</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/costReport" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Cost</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/comTransReport" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Complete Transactions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/incomTransReport" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Incompleted Transactions</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/renewTransReport" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Renewed Transactions</p>
                </a>
              </li>
            </ul>
          </li>

          

          <li class="nav-item">
            <a href="{{route('home.Warning.index')}}" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Warning Notices
                
              </p>
            </a>
          </li>
           

          
          
         <li class="nav-item" style="margin-top: 200px;">
          <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon far fa-circle text-danger"></i>
          Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
          </form>
           
           
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer offset-5">
    <strong>Copyright &copy; 2020 <a href="#">Golden Pawn</a></strong>
    All rights reserved.
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- jQuery UI 1.11.4 -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

<!-- auto complete -->





</body>
</html>
