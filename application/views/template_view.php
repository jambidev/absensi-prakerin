<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- animate bootstrap notify -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/animate.min.css">
  <!-- Data tables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- image popup -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/css/popup.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/css/animate.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Highchart -->
  <script src="<?php echo base_url(); ?>plugins/highcharts/highcharts.js"></script>
  <script src="<?php echo base_url(); ?>plugins/highcharts/code/modules/exporting.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- template admin -->
      <?php if ($this->session->userdata('role') == 1): ?>
        <header class="main-header" id="cok">
          <!-- Logo -->
          <a href="<?php echo base_url(); ?>admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><small><b>Telkom Schools</b> Malang</small></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php if ($foto == "-"): ?>
                      <img src="<?php echo base_url();?>admin.png" alt="User Image" class="user-image">
                    <?php else: ?>
                      <img src="<?php echo base_url();?>uploads/foto_admin/<?php echo $foto; ?>" alt="User Image" class="user-image">
                    <?php endif; ?>
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                  <!-- User image -->
                    <li class="user-header">
                      <?php if ($foto == "-"): ?>
                        <img src="<?php echo base_url();?>admin.png" alt="User Image" class="img-circle">
                      <?php else: ?>
                        <img src="<?php echo base_url();?>uploads/foto_admin/<?php echo $foto; ?>" alt="User Image" class="img-circle">
                      <?php endif; ?>
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng');?>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div>
                        <div class="pull-left">
                        <a href="<?php echo base_url(); ?>admin/profil" class="btn btn-default">Profile</a>
                      </div>
                      <div class="pull-right">
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal">Sign out</button>
                      </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li>
                <a href="<?php echo base_url(); ?>admin">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <li class="treeview">
                <a href="#">
                    <i class="fa fa-plus"></i> <span>Tambah Data</span>
                    <span class="pull-right-container"></span>
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>                            

                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>admin/addguru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/addsiswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/addindustri"><i class="fa fa-circle-o"></i> Data Industri</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/addadmin"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-search"></i> <span>Lihat Data</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url(); ?>admin/dataadmin"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/dataguru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/datasiswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/dataindustri"><i class="fa fa-circle-o"></i> Data Industri</a></li>
                </ul>
              </li>
              <!-- <li>
                <a href="admin/rekapdata">
                  <i class="fa fa-list-alt"></i> <span>Rekap Data Absen Siswa</span>
                </a>
              </li> -->
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <!-- template guru -->
      <?php elseif ($this->session->userdata('role') == 2): ?>
        <header class="main-header">
          <!-- Logo -->
          <a href="<?php echo base_url(); ?>guru" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><small><b>Telkom Schools</b> Malang</small></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php if ($foto == "-" && $jk == "Perempuan"): ?>
                      <img src="<?php echo base_url();?>avatar_female.png" alt="User Image" class="user-image">
                    <?php elseif ($foto == "-" && $jk == "Laki-Laki"): ?>
                      <img src="<?php echo base_url();?>avatar_male.png" alt="User Image" class="user-image">
                    <?php else: ?>
                      <img src="<?php echo base_url();?>uploads/foto_guru/<?php echo $foto; ?>" alt="User Image" class="user-image">
                    <?php endif; ?>
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                  <!-- User image -->
                    <li class="user-header">
                      <?php if ($foto == "-" && $jk == "Perempuan"): ?>
                        <img src="<?php echo base_url();?>avatar_female.png" alt="User Image" class="img-circle">
                      <?php elseif ($foto == "-" && $jk == "Laki-Laki"): ?>
                        <img src="<?php echo base_url();?>avatar_male.png" alt="User Image" class="img-circle">
                      <?php else: ?>
                        <img src="<?php echo base_url();?>uploads/foto_guru/<?php echo $foto; ?>" alt="User Image" class="img-circle">
                      <?php endif; ?>
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng'); ?> - <?php echo $kota; ?>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="<?php echo base_url(); ?>guru/profil" class="btn btn-default">Profile</a>
                      </div>
                      <div class="pull-right">
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal">Sign out</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active">
                <a href="<?php echo base_url(); ?>guru">
                  <i class="fa fa-search"></i> <span>Lihat Data</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>guru/rekapdata">
                  <i class="fa fa-list-alt"></i> <span>Rekap Data Absen</span>
              </li>
            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <!-- template siswa -->
      <?php elseif ($this->session->userdata('role') == 3): ?>
        <header class="main-header">
          <!-- Logo -->
          <a href="<?php echo base_url(); ?>siswa" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><small><b>Telkom Schools</b> Malang</small></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php if ($foto == "-" && $jk == "Perempuan"): ?>
                      <img src="<?php echo base_url();?>female.png" alt="User Image" class="user-image">
                    <?php elseif ($foto == "-" && $jk == "Laki-Laki"): ?>
                      <img src="<?php echo base_url();?>male.png" alt="User Image" class="user-image">
                    <?php else: ?>
                      <img src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $foto; ?>" alt="User Image" class="user-image">
                    <?php endif; ?>
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <?php if ($foto == "-" && $jk == "Perempuan"): ?>
                        <img src="<?php echo base_url();?>female.png" alt="User Image" class="img-circle">
                      <?php elseif ($foto == "-" && $jk == "Laki-Laki"): ?>
                        <img src="<?php echo base_url();?>male.png" alt="User Image" class="img-circle">
                      <?php else: ?>
                        <img src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $foto; ?>" alt="User Image" class="img-circle">
                      <?php endif; ?>
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng'); ?> - <?php echo $kelas; ?><br>
                        <small><?php echo $industri; ?>, <?php echo $kota; ?></small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="<?php echo base_url(); ?>siswa/profilku" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal">Sign out</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>
      
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
              <a href="<?php echo base_url(); ?>siswa">
                <i class="fa fa-plus"></i> <span>Absensi</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i> <span>Lihat Profil</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>siswa/profilku"><i class="fa fa-circle-o"></i> Profilku</a></li>
                <li><a href="<?php echo base_url(); ?>siswa/profilguru"><i class="fa fa-circle-o"></i> Profil Guru Pembimbing</a></li>
              </ul>
            </li>
          </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <!-- template industri -->
      <?php elseif ($this->session->userdata('role') == 4): ?>
        <header class="main-header">
          <!-- Logo -->
          <a href="<?php echo base_url(); ?>industri" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><small><b>Telkom Schools</b> Malang</small></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>Industri.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">Hi, <?php echo $this->session->userdata('jeneng'); ?></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="<?php echo base_url();?>industri.png" class="img-circle" alt="User Image">
                      <p style="color: white; ">
                        <?php echo $this->session->userdata('jeneng'); ?>
                        <small><?php echo $kota; ?></small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div>
                        <button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal">Sign out</button>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </header>
      
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
              <a href="<?php echo base_url(); ?>siswa"">
                <i class="fa fa-file-text-o"></i> <span>Absensi</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i> <span>Lihat Profil</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url(); ?>industri/datasiswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
                <li><a href="<?php echo base_url(); ?>industri/dataguru"><i class="fa fa-circle-o"></i> Profil Guru Pembimbing</a></li>
              </ul>
            </li>
          </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

      <?php endif; ?>

      <!-- The Modal -->
      <div class="modal fade" role="dialog" id="myModal">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4>
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <strong>Are you sure you want to log-off?</strong>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <a href="<?php echo base_url(); ?>logout" class="btn btn-danger btn-block">Sign out</a>
                </div>
            </div>
          </div>
      </div>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <!-- <section class="content"> -->

          <?php $this->load->view($main_view) ?>

        <!-- </section> -->
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Powered by <a href="https://adminlte.io" target="_blank"><strong>Admin LTE</strong></a>
          
        </div>
        <strong>Copyright &copy; 2017-2018 <a href="http://smktelkom-mlg.sch.id/" target="_blank">SMK Telkom Malang</a>.</strong> All rights reserved. <b>Version</b> 1.0.0
        
      </footer>
    </div>
    <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.js"></script>
  <script src="<?php echo base_url(); ?>import/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(); ?>dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
  <script>
    $('.select2').select2();
  </script>

  <!-- Data tables -->
  <script src="<?php echo base_url(); ?>dist/js/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>dist/js/dataTables.buttons.min.js"></script>
  <script>
    $(function () {
      $('#dataTables-guru').DataTable({
        scrollX:        true,
        scrollCollapse: true,
        responsive: true
      });
      $('#dataTables-siswa').DataTable({
        scrollX:        true,
        scrollCollapse: true,
        responsive: true
      });
      $('#dataTables-industri').DataTable({
        scrollX:        true,
        scrollCollapse: true,
        responsive: true
      });
      $('#dataTables-dasGuru').DataTable({
        scrollX:        true,
        scrollCollapse: true,
        responsive: true
      });
      $('#dataTables-absSiswa').DataTable({
        scrollX:        true,
        scrollCollapse: true,
        responsive: true
      });
      $('#dataTables-IndAbs').DataTable({
        scrollX: true,
        scrollCollapse: true,
        responsive: true,
      });
      /*$('#dataTables-rekap').DataTable({
        scrollX: true,
        scrollCollapse: true,
        responsive: true,
        //bFilter: false,
        "bLengthChange": false,
      });*/
    })
  </script>
  <style type="text/css">
    .dataTables_filter, .dataTables_info { display: none; }
  </style>

  <!-- bootstrap notify -->
  <script src="<?php echo base_url() ?>dist/js/bootstrap-notify.js"></script>
  <script type="text/javascript">
    <?php
      $notif = $this->session->flashdata('notif'); 
      if (!empty($notif)) {
        if ($notif == 'Berhasil menambahkan data siswa') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Succes!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menambahkan data siswa') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Lengkapi semua field') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menambahkan data guru') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menambahkan data guru') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menghapus data siswa') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menghapus data siswa') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menghapus data guru') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menghapus data guru') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah data guru') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah data siswa') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil absen') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal absen') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menambah data industri') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menambah data industri') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Lengkapi Field') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menghapus data industri') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menghapus data industri') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah data industri') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal mengubah data industri') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah profil') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal mengubah profil') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah foto') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal mengubah foto') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal import data siswa') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil import data siswa') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah jurnal') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal mengubah jurnal') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal import data guru') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil import data guru') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal import data industri') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil import data industri') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil menambah data admin') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Gagal menambah data admin') { ?>
          $.notify({
            icon: 'glyphicon glyphicon-warning-sign',
            title: '<strong>&nbsp;Warning!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'danger',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php } elseif ($notif == 'Berhasil mengubah profil') { ?>
          $.notify({
            icon: 'fa fa-check',
            title: '<strong>&nbsp;Success!</strong><br>',
            message: "<?php echo $notif; ?>"
          },{
            timer: 2000,
            delay: 500,
            type: 'success',
            placement: {
              from: "top",
              align: "center"
          },
          animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
          },
        });
        <?php }
      }
    ?>
  </script>

  </body>
</html>