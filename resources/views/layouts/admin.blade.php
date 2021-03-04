<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.cs') }}s">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Bootstrap 4 RTL -->
  <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
  <!-- Custom style for RTL -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/custom.css') }}">

  <!-- toaster link css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">الرئيسية</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">
          @role('superAdmin')
          أدمن رئيسي
          @else
          أدمن
          @endrole
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if(!$user->image)
            <img src="{{ asset('frontend/images/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
            @else
            <img src="{{ asset('storage/avatars/'.$user->image) }}" class="img-circle elevation-2" alt="User Image">
            @endif

        </div>
        <div class="info">
          <a href="{{ route('profile', $user->id) }}" class="d-block">{{ $user->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php $segment = Request::segment(2) ?>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link @if(!$segment) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الرئيسية
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                انشاء
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              {{-- <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link @if($segment=='categories') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>انشاء الأقسام</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="{{ route('admin.filters.index') }}" class="nav-link @if($segment=='filters') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>انشاء قيم الفلاتر</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.cities.index') }}" class="nav-link @if($segment=='cities') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>انشاء المدن والأحياء</p>
                </a>
              </li>


            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                المنتجات
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.products.index') }}" class="nav-link @if($segment=='products') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>جميع المنتجات</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.products.waiting') }}" class="nav-link @if($segment=='waiting') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>منتجات في انتظار الموافقة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.products.approved') }}" class="nav-link @if($segment=='approved') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>منتجات تمت الموافقة عليها</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.users.index') }}" class="nav-link @if($segment=='users') active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>
                المستخدمين
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.info') }}" class="nav-link @if($segment=='info') active @endif">
                <i class="nav-icon fas fa-info"></i>
                <p>
                    معلومات الصفحة
                </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.setting') }}" class="nav-link @if($segment=='setting') active @endif">
                <i class="nav-icon fas fa-info"></i>
                <p>
                    الاعدادات
                </p>
            </a>
          </li>




          <li class="nav-header">العمليات</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    {{ __('تسجيل خروج') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- For AJAX -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

@yield('scripts')



<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<!--toaster js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
{{-- @jquery
@toastr_js --}}

@toastr_render

</html>
