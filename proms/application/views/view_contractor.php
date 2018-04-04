<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMS |  Contractor</title>
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
          <a href="<?php echo site_url('ContractorController/List_Contractor_view');?>">
            <i class="fa fa-table"></i> 
			
      <span>Manage Contractor</span>
            <span class="pull-right-container">
       <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
       <li><a href="<?php echo site_url('ContractorController/listcontractorview');?>"><i class="fa fa-circle-o"></i> List  Of The Contractors</a></li>
      
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
      View Contractor

      </h1>
      <ol class="breadcrumb">
       <li><a href="<?php echo site_url('ProjectController/profile_view');?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo site_url('ContractorController/listcontractorview');?>">List Of Registered Contractor</a></li>
        <li class="active">Viewing Contractor Details</li>
      </ol>
    </section>
	

	<!-- Main content -->
	
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contractor Detail</h3>
            </div>
            <!-- /.box-header -->
		
			<?php $ContractorController = $this->Contractor_Model->viewContractorModel($p);?>
			<?php foreach ($ContractorController as $v):?>	
			
            <!-- form start -->
            <form role="form">
              <div class="box-body">
			  
			  	<div class="form-group">
                  <label for="con_name">Company Name</label>
                  <input type="text" class="form-control" id="con_name" name="con_name" placeholder="Name Of The Company" value="<?php echo $v['con_name']; ?>" readonly/>
                </div>
				
                <div class="form-group">
                  <label for="con_licensenumber">Company License Number</label>
                  <input type="text" class="form-control" id="con_licensenumber" name="con_licensenumber" placeholder="License Number" value="<?php echo $v['con_licensenumber']; ?>" readonly/>
                </div>
				
				<div class="form-group">
                  <label for="con_phone">Company Contact Number</label>
                  <input type="text" class="form-control" id="con_phone" name="con_phone" placeholder="Contact Number" value="<?php echo $v['con_phone']; ?>" readonly/>
                </div>
				
				 <div class="form-group">               
                  <label for="con_email">Company Email</label>
                  <input type="text" class="form-control" id="con_email" name="con_email" placeholder="Email" value="<?php echo $v['con_email']; ?>" readonly/>
                </div>	

				 <div class="form-group">               
                  <label for="con_address">Company Address</label>
                  <input type="text" class="form-control" id="con_address" name="con_address" placeholder="Address" value="<?php echo $v['con_address']; ?>" readonly/>
                </div>					
				
				<div class="form-group">
                  <label for="con_class">Class Of Company</label>
                  <input type="text" class="form-control" id="con_class" name="con_class" placeholder="Class" value="<?php echo $v['con_class']; ?>"/ readonly>
                </div>

         <div class="form-group">
                  <label for="id">Staff Incharge</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Staff Incharge" value="<?php echo $v['username']; ?>"/ readonly>
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

  
  
