<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" sizes="4x4" href="{{asset('assets/img/nmpc-logo.png')}}">
  <title>Admin Dashboard </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700;800;900&display=swap');

    *{
        font-family: 'Source Sans 3', sans-serif;
    }

    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #212529; }
    ::-webkit-scrollbar-thumb {
      background: #212529;
      transition: all 0.3s ease;
    }
    ::-webkit-scrollbar-thumb:hover { background: #000; }

    .parent {
        display: flex;
        color: white;

        text-align: center;
        text-align: center;
    }
    .child {
        display: inline-block;
        padding: 0.3rem;
        vertical-align: middle;
    }
    .info{
        padding: 0;margin: 0;
        font-size: 11px;
        font-weight: 400;
        text-transform: uppercase;
        text-align: center;
    }
    .sched{
        font-size: 12px;
        padding: 0;margin: 0;
        font-weight: bold;
        place-content: center;
    }
    .calendar{

        font-size: 20px;
        padding: 0.01% 1rem;
        color: black;
        background: whitesmoke;
        border: 2px solid rgba(255, 255, 255, 0,2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    .logo{
        width: 60px;
        height: auto;
        background: transparent;
    }

    .nav-item{ padding-bottom: 2%;}
    .breadcrumb-item a { color: black; text-transform: uppercase; }

    .icon{
      display: inline-block;
      font-size: 12px;
    }
    .icon i{ color: black; }

    thead, th{
      text-align: center;
      font-size: 14px;
      text-transform: uppercase;
    }
    tbody, td{
      text-align: center;
      font-size: 14px;
    }

    .badge{
      background: #28a745;
      color: white;
      padding: 5px;
      font-size: 12px;
    }
    .badge-amen{ background: #9C0D0F; }

  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class=" preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{asset('assets/img/nmpc-logo.png')}}" alt="AdminLTELogo" width="250">
        </div>

        <!-- Navbar -->
        <nav style="background: #9C0D0F; color: white;" class="main-header navbar navbar-expand">

                <!-- Left navbar links -->
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-compress"></i></a>
                </li>
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

                    <div class='parent'>
                        <div class='child '>
                            <div class="info"> Today's Date</div>
                            <div class="heading-sub12 child sched">
                                <?php
                                    date_default_timezone_set('Asia/Manila');
                                    $today = date('m-d-Y');
                                    echo $today;
                                ?>
                            </div>
                        </div>
                        <div class='child calendar'><i class="far fa-calendar-days"></i></div>
                    </div>
                </ul>
        </nav>
        <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside style="background: #212529; color: white;" class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Brand Logo -->
            <a href="" style="background: #212529; color: white" class="mt-1 pb-3 d-flex brand-link">
            <img src="{{asset('assets/img/nmpc-logo.png')}}" class="logo">
            <span class="brand-text font-weight-bold">MSU-IIT NMPC</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-4 pb-3 mb-3 d-flex">
            <div class="image">
                    @if(Auth::check() && Auth::user()->image)
                        <img src="{{ asset('storage/app/public/users/' . Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image">
                    @else
                        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="Default Image">
                    @endif
                </div>
                <div class="info">
                @if(Auth::check())
                    <a href="#" style="font-size: 15px; text-transform: capitalize; font-weight: 400;" class="ml-2 d-block">
                        {{ Auth::user()->username }}
                    </a>
                @endif
            </div>

            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="" style="background: #9C0D0F;" class="nav-link active">
                            <i class="nav-icon fas fa-folder-closed"></i>
                            <p> BOD Resolutions </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p> Board of Directors </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-gear"></i>
                        <p>
                            Department Heads
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p> Logs </p>
                                </a>
                            </li>
                        </ul>
                    </li>


                <li class="nav-header">OTHERS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-gear"></i>
                    <p>
                        Settings
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-user-gear nav-icon"></i>
                        <p>Update Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        
                        <i class="fas fa-arrow-right-from-bracket nav-icon"></i>
                        <p>
                        <a href="{{ route('logout') }}" class="nav-link">Logout</a>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                    </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-3 mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">BOD Resolutions</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">BOD Resolutions</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Info boxes -->
              <div class="row">
                    <div class="col-lg-4 col-6">
                        <!-- small card -->
                        <div style="background: #ffc107;" class="small-box shadow">
                        <div class="inner">
                            <h3>{{ $totalResolutions }}</h3>
                            <p>BOD Resolutions</p>
                        </div>
                                  <div class="icon">
                                <i class="fas fa-folder-closed"></i>
                            </div>
                        <a href="#" style="color: black;" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-4 col-6">
                        <!-- small card -->
                        <div style="background: #ffc107;" class="small-box shadow">
                            <div class="inner">
                                <h3>12k</h3>
                                <p>Board of Directors</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        <a href="#" style="color: black;" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-lg-4 col-6">
                        <!-- small card -->
                        <div style="background: #ffc107;" class="small-box shadow">
                            <div class="inner">
                                <h3>12k</h3>
                                <p>Department Heads</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users-gear"></i>
                            </div>
                        <a href="#" style="color: black;" class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                      <h3 class="card-title">
                      <a href="{{ route('resolution.create') }}" class="btn btn-block bg-gradient-primary">Add BOD Resolution</a>
                     </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                      <table id="example1" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Res. No.</th>
                              <th>Agenda</th>
                              <th>Res. Date</th>
                              <th>Status</th>
                              <th>Encoded by</th>
                              <th>Actions</th>
                          </tr>
                      </thead>

                      <tbody>
                          @foreach($resolutions as $resolution)
                          <tr>
                              <td>{{ $resolution->res_number }}</td>
                              <td>{{ $resolution->agenda }}</td>
                              <td>{{ $resolution->res_date }}</td>
                              <td>{{ $resolution->status }}</td>
                              <td>{{ $resolution->encoded_by }}</td>
                              <td style="display: flex; gap: 5%;">
                                  <a href="{{ route('resolution.edit', $resolution->id) }}" class="icon edit">
                                      <button type="button" class="btn btn-warning">
                                          <i class="fas fa-pen-nib"></i>
                                      </button>
                                  </a>
                                  <!-- Add a delete button with a form for each record -->
                                  <form action="{{ route('resolution.delete', $resolution->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="icon delete btn btn-danger">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                  </form>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                         @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                            </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
                </div>
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer style="background: #212529; color: white; text-transform: uppercase; font-size: 12px; text-align: center;" class="main-footer">
        <strong>Copyright &copy; 2023-2024
            <a style="color: white; text-transform: uppercase; font-size: 12px;" href="https://adminlte.io">MSU-IIT National Multi-Purpose Cooperative</a>.
            All rights reserved.
        </strong>
    </footer>
    </div>
    <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard2.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
