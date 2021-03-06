<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMS | Homepage</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PMS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PMS</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs">Sign Out</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo  $this->session->userdata['username'] . "";?> 
                 
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
         
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo  $this->session->userdata['username'] . "";?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
    <li class="treeview">
          <a href="<?php echo site_url('ProjectController/profile_view');?>">

            <i class="fa fa-table"></i> 
            <span>Register</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">

       <li><a href="<?php echo site_url('ProjectController/addcontractor');?>"><i class="fa fa-circle-o"></i> Contractor</a>
        </li>

       <li><a href="<?php echo site_url('ProjectController/addproject');?>"><i class="fa fa-circle-o"></i> Project</a>
       </li>
      </ul>

    </li>
    
    
    </ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff Profile
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staff Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-5">

          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Welcome: <?php echo  $this->session->userdata['username'] . "";?></h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
      <?php $a = $this->session->userdata('username');

      $detail = $this->Project_Model->details($a);?>
      <?php foreach($detail as $s): ?>
      
               <form role="form">
              <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">

        <tr><div class="form-group">
                  <td><label for="name">Title</label> <label></td> <td><b>Details</b></label></td>
                </div></tr>

        <tr><div class="form-group">
                  <td><label for="name">ID Number</label> <label></td> <td> <?php echo $s['id']; ?> </label></td>
                </div></tr>

          <tr><div class="form-group">
                  <td><label for="name">Name</label> <label></td> <td> <?php echo $s['name']; ?> </label></td>
                </div></tr>
        
        <tr><div class="form-group">
                  <td><label for="name">Grade</label> <label></td> <td> <?php echo $s['grade']; ?> </label></td>
                </div></tr>
        
        <tr><div class="form-group">
                  <td><label for="name">Email</label> <label></td><td>  <?php echo $s['email']; ?> </label></td>
                </div></tr>

        <tr><div class="form-group">
                  <td><label for="name">Contact Number</label> <label></td><td>  <?php echo $s['phone']; ?> </label></td>
                </div></tr>

               <!-- <td> <a href="<?php echo site_url("projectcontroller/view_staff/{$s['id']}") ?>" >
       <button type="submit" class="btn btn-danger" name="update"> Update</button></a>
     </td>-->
        
               </table>
                
        

            </form>
       <?php endforeach; ?>  
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; Project Management System (KKLW Negeri Sembilan).</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
 
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>/dist/js/demo.js"></script>
<!-- page script -->
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
</body>
</html>
