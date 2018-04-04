<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMS | Update User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Kk</b>LW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kk</b>LW</span>
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
              <span class="hidden-xs"><?php echo  $this->session->userdata['username'] . "";?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
                <p>
                  <?php echo  $this->session->userdata['username'] . "";?>
                  <small>* * *</small>
                </p>
              </li>
              
                <!-- /.row -->
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
          <img src="<?php echo base_url()?>dist/img/tm.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo  $this->session->userdata['username'] . "";?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
       

    
    
   
    
    </ul>
        
    </section>

                
    </section>
    <!-- /.sidebar -->
  </aside>



 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update User

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('LoginController/list_user_view');?>"><i class="fa fa-dashboard"></i> Profile</a></li>
         
        <li class="active">Update In Progress</li>
      </ol>
    </section>
  
<form  method="post" action="<?php echo site_url('LoginController/updateStaffControllerAdmin');?>">
    
  <!-- Main content -->
  
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Staff details</h3>
            </div>
            <!-- /.box-header -->
      
      <?php $LoginController = $this->Login_Model->getone($s);
      foreach ($LoginController as $a):?>     
            
      <!-- form start -->
            <form role="form">
              <div class="box-body">
                <input type="text" name="id" value="<?php echo $s; ?>" hidden>
          <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $a -> name; ?>"required>
                </div>
        
               
        
        <div class="form-group">
                  <label for="password">Password</label>
                  <input type="hidden" name="curpswd" value="<?php echo $a ->  password; ?>"required >
                  <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $a ->  password; ?>"required >
                </div>
        
        <div class="form-group">
                  <label for="username">Username</label>
                  <input type="username" class="form-control" name="username" placeholder="Username" value="<?php echo $a -> username; ?>"required >
                </div>

        <div class="form-group">
                  <label for="phone">Contact Number</label>
                  <input type="phone" class="form-control" name="phone" placeholder="Contact Number" value="<?php echo $a -> phone; ?>"required >
                </div>

        <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $a -> email; ?>"required >
                </div>

       
           
        <div class="form-group">
          <label>Grade</label>
            <select class="form-control select2" style="width: 100%;" name="grade" placeholder="grade" value="<?php echo $a -> grade; ?>"required > 
                  
                  <option value="J29">J29</option>
                  <option value="J36">J36</option>
                  <option value="J41">J41</option>
                  <option value="M44">M44</option>
                  <option value="M52">M52</option>
          
                </select>
              </div>



         <div class="form-group">
                  <label for="role"></label>
                  <input type="hidden" class="form-control" name="role" value="<? echo $a -> role; ?>" hidden>
                </div>


        
              </div>
              <!-- /.box-body -->
              <?php endforeach; ?>
        
              <div class="box-footer">
          <input type="submit" class="btn btn-primary" name="update" value="Update User"/></td> 
                <!--<button type="submit" class="btn btn-primary pull-right" id="add"> Submit</button>-->
              </div>
            </form>
          </div>
          <!-- /.box -->
          
      </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
       
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
    <strong>Copyright &copy; Project Management System (KKLW Negeri Sembilan)</strong> All rights
    reserved.
  </footer>


 
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>dist/js/demo.js"></script>
</body>
</html>