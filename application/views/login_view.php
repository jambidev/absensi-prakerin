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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">
    <!-- animate bootstrap notify -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/animate.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page" style="display: flex;">
    <div class="login-box" style="">
      <div class="login-logo">
        <h3><b>Jurnal Kegiatan Prakerin</b><br>&nbsp;SMK Telkom Malang</h3>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form role="form" method="post" action="<?php echo base_url(); ?>index.php/login/masuk">
          <fieldset>
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-md-12">
                <input type="submit" name="submit" value="Sign In" class="btn btn-primary btn-block btn-flat">
              </div>
              <!-- /.col -->
            </div>
          </fieldset>
        </form>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url() ?>dist/js/bootstrap-notify.js"></script>
    <script type="text/javascript">
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' /* optional */
        });
      });

      <?php $notif = $this->session->flashdata('notif'); ?>
      <?php if(!empty($notif)): ?>
        $.notify({
          icon: 'glyphicon glyphicon-warning-sign',
          title: '<strong>&nbsp;Sign In Warning!</strong><br>',
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
      <?php endif; ?>
    </script>
  </body>
</html>