<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMS |  View Project</title>
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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PROMS</b>KkLW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PROMS</b>KkLW</span>
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
            <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

               
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
          <img src="<?php echo base_url()?>/dist/img/avatar3.png" class="img-circle" alt="User Image">
        </div>
         <div class="pull-left info">
          <p><?php echo  $this->session->userdata['username'] . "";?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
		<li class="treeview">
          <a href="<?php echo site_url('ProjectController/List_Project_view');?>">
            <i class="fa fa-table"></i> 
			<span>Manage project</span>
            <span class="pull-right-container">
			 <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
		   <li><a href="<?php echo site_url('ProjectController/listprojectview');?>"><i class="fa fa-circle-o"></i> List Of Project</a></li>
            
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
      View Project

      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo site_url('ProjectController/profile_view');?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo site_url('ProjectController/listprojectview');?>">Projects List</a></li>
        <li class="active">Viewing Project</li>
      </ol>
    </section>
	

	<!-- Main content -->
	
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Project Detail</h3>
            </div>
            <!-- /.box-header -->
		
			<?php
      
      $ProjectController = $this->Project_Model->viewProjectModel($p);?>
			<?php foreach ($ProjectController as $v):?>	
			
            <!-- form start -->
            <form role="form">
              <div class="box-body">
			  
			  	<div class="form-group">
                  <label for="pro_name">Name Of Project</label>
                  <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Name Of Project" value="<?php echo $v['pro_name']; ?>" readonly/>
                </div>
				
                <div class="form-group">
                  <label for="begin_date">Start Date</label>
                  <input type="date" class="form-control" id="begin_date" name="begin_date" placeholder="Date Of The Project Start" value="<?php echo $v['begin_date']; ?>" readonly/>
                </div>
				
				<div class="form-group">
                  <label for="end_date">Finishing Date</label>
                  <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Finishing Date Of Project" value="<?php echo $v['end_date']; ?>" readonly/>
                </div>
				
				

				 <div class="form-group">               
                  <label for="description">Project Description</label>
                  <div>
                  <input type="description" class="form-control" id="description" name="description" placeholder="Description Of The Project" value="<?php echo $v['description']; ?>" readonly/>
                </div>					
				
				<div class="form-group">
                  <label for="cost">Cost Of Project ( RM )</label>
                  <input type="text" class="form-control" id="cost" name="cost" placeholder="Cost (RM)" value="<?php echo $v['cost']; ?>"/ readonly>
                </div>


				<div class="form-group">
                  <label for="con_id">Contractor Incharge</label>
                  <input type="text" class="form-control" id="con_name" name="con_name" placeholder="Contractor Incharge" value="<?php echo $v['con_name']; ?>"/ readonly>
                </div>


        <div class="form-group">
                  <label for="id">Staff Incharge</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Staff Incharge" value="<?php echo $v['username']; ?>"/ readonly>
                </div>


         <div class="form-group">
                  <label for="updateProgress">Project Progress</label>
                  <input type="text" class="form-control" id="updateProgress" name="updateProgress" placeholder="Project Progress" value="<?php echo $v['updateProgress']; ?>"/ readonly>
                </div>

              </div>
              <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
       
              
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <?php endforeach; ?>             
			  
              <div class="box-footer">
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
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

  
  
