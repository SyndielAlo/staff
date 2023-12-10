<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" sizes="4x4" href="{{asset('assets/img/nmpc-logo.png')}}">
  <title>msu-iit nmpc</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/min/dropzone.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">

  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{asset('assets/plugins/codemirror/codemirror.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/codemirror/theme/monokai.css')}}">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="{{asset('assets/plugins/simplemde/simplemde.min.css')}}">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@300;400;500;600;700;800;900&display=swap');

    *{
        font-family: 'Source Sans 3', sans-serif;
    }

    body{
        overflow-x: hidden;
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
            <span class="brand-text font-weight-bold">msu-iit nmpc</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-4 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="{{asset('assets/img/admin.png')}}" class="img-circle elevation-2">
                </div>
                <div class="info">
                <a href="#" style="font-size: 15px; text-transform: capitalize; font-weight: 400; color:white;" class="ml-2 d-block font-weight-bold">Alexander Pierce</a>
                </div>
            </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{url('bodres-dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-folder-closed"></i>
                            <p> BOD Resolutions </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('BOD-dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-building-user"></i>
                            <p>
                                BOD Members
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('BOD-dashboard')}}" class="nav-link">
                                    <i class="nav-icon fas fa-user-tie"></i>
                                    <p> Board of Directors </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('BOD-Com-dashboard')}}" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p> Const. Committees </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dh-dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-users-gear"></i>
                            <p>
                                Department Heads
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url('dh-dashboard')}}" class="nav-link">
                                    <i class="far fa-circle-user nav-icon"></i>
                                    <p> Department Heads </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('dh-logs')}}" class="nav-link">
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
                        <a href="{{url('users/update-profile')}}" style="background: #9C0D0F; color:white;" class="nav-link active">
                        <i class="fas fa-user-gear nav-icon"></i>
                        <p>Update Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-arrow-right-from-bracket nav-icon"></i>
                            <p>Logout</p>
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
                        <h1 class="m-0">Update Profile</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-secondary card-outline">
                            <div class="card-body box-profile mb-2">
                                <div class="text-center">
                                    <img style="width: 150px;" class="profile-user-img img-fluid img-circle mb-3" src="{{asset('assets/dist/img/user4-128x128.jpg')}}">
                                </div>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item"> <strong style="text-transform: uppercase;">Name</strong> <a style="font-weight: 10px; color: #212529;" class="float-right">Alexander Piere</a> </li>
                                    <li class="list-group-item"> <strong style="text-transform: uppercase;">Username</strong> <a style="font-weight: 10px; color: #212529;" class="float-right">alexander.piere</a> </li>
                                    <li class="list-group-item"> <strong style="text-transform: uppercase;">Role</strong> <a style="font-weight: 10px; color: #212529;" class="float-right">BOD Secretary</a> </li>
                                </ul>

                                <a href="#" class="btn btn-secondary btn-block"><strong>INFO</strong></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <!-- Profile Image -->
                        <div class="card card-secondary card-outline">
                            <div class="card-body box-profile inline-block">
                                <form class="form-horizontal pb-3">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName2" placeholder="Old Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName2" placeholder="New Password">
                                        </div>
                                    </div>
                                </form>
                                <!-- /.form-group -->

                                <div class="col-12 mt-5">
                                    <a href="{{url('bodres-dashboard')}}" class="btn btn-danger">Cancel</a>
                                    <a href="">
                                        <input type="submit" value="Update" class="btn btn-warning float-right">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                        <!-- /.card -->
                    </div>


                </div>
                <!-- /.row -->
            </div>
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

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>

<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('assets/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('assets/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('assets/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>

<script>
  $(function () {

    $('#summernote').summernote()

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }

  // DropzoneJS Demo Code End
</script>

</body>
</html>
