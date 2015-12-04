<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> PPU HMSI | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"/>  
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datatables/dataTables.bootstrap.css')}}"/>  
   
    <!-- jvectormap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}"/>  
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/AdminLTE.min.css')}}"/>  
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/skins/_all-skins.min.css')}}"/>  
    <!-- data tables style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datatables/dataTables.bootstrap.css')}}"/>  
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datatables/jquery.dataTables.css')}}"/>  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Theme style -->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin.css')}}"/>   --}}


    <!--jQuery Include-->
    <!-- jQuery 2.1.4 -->
    <script type="text/javascript" src="{{asset('assets/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script> 
    <!-- Bootstrap 3.3.2 JS -->
    <script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> 
    <!-- FastClick -->
    <script type="text/javascript" src="{{asset('assets/plugins/fastclick/fastclick.min.js')}}"></script> 
    <!-- AdminLTE App -->
    <script type="text/javascript" src="{{asset('assets/dist/js/app.min.js')}}"></script> 
    <!-- Sparkline -->
    <script type="text/javascript" src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script> 
    <!-- jvectormap -->
    <script type="text/javascript" src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script> 
    <!-- SlimScroll 1.3.0 -->
    <script type="text/javascript" src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script> 
    <!-- ChartJS 1.0.1 -->
    <script type="text/javascript" src="{{asset('assets/plugins/chartjs/Chart.min.js')}}"></script> 
    <!-- datatables -->
    <script type="text/javascript" src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script> 
    <script type="text/javascript" src="{{asset('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script> 
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></b>PPUH</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>PPUH</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user"></i>
                  <span class="hidden-xs">Administrator</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <i class="fa fa-user"></i>
                    <p>
                      Administrator
                    </p>
                  </li>
                  <!-- Menu Body -->
                 <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              {{-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> --}}
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        @include('/admin/layout/sidebar-left')
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
        @yield('content')

        
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015 <a href="http://prodase.bis.telkomuniverisity.ac.id">Prodase Laboratory</a></strong> All rights reserved.
      </footer>
      <!-- Control Sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->
    <!-- AdminLTE for demo purposes -->
    {{-- <script type="text/javascript" src="{{asset('assets/dist/js/scripts.js')}}"></script>  --}}

    <!-- jQuery 2.1.4 -->
    <script src="{{assets('assets/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
     <script src="{{assets('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- DataTables -->
     <script src="{{assets('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
     <script src="{{assets('assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
     <script src="{{assets('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
     <script src="{{assets('assets/plugins/fastclick/fastclick.min.js')}}"></script>
     <script src="{{assets('assets/plugins/chartjs/Chart.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{assets('assets/dist/js/app.min.js')}}"></script>
    <script src="{{assets('assets/dist/js/demo.js')}}"></script>
    <!-- page script -->

    @yield('scripts')

  </body>
</html>