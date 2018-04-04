<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMS | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>



<div class="pull-centre image">
          
  </div>

<div class="login-box">
  <div class="login-logo">
  <div class="pull-centre image">
          <img src="<?php echo base_url();?>/dist/img/kkl.png">
        </div>
    <a href="../../index2.html"><b>Project Management System(ProMS) for KKLW </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>


   <form>
      <div class="form-group has-feedback">

        <input type="text" class="form-control" id="txt_username"  name="txt_username" placeholder="Username" value="<?php echo set_value('txt_username'); ?>" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"  id="txt_password" name="txt_password" placeholder="Password" value="<?php echo set_value('txt_password'); ?>" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div>
        <!-- /.col -->
        <!--<div class="col-xs-4">-->
          <div class="box-body">
          <a href="<?php echo site_url('LoginController/add_staff_view');?>" > <button type="button" class="btn btn-primary btn-block btn-flat" name="view"> Register</button></a>
          <br>
        <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary btn-block btn-flat"  value="Login" />
        </div><!-- box body -->
        <!-- /.col -->
      </div>
    </form>
     <br>

    <?php echo form_close(); ?>
    <?php echo $this->session->flashdata('msg'); ?>




   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>plugins/iCheck/icheck.min.js"></script>
</body>
</html>