<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMS | Register New Project</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/datatables/dataTables.bootstrap.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/skins/_all-skins.min.css">

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
    <a href="staff_profile.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>PMs</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PM</b>s</span>
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
              <img src="<?php echo base_url()?>dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo  $this->session->userdata['username'] . "";?> 
                   <?php echo  $this->session->userdata['con_id'] . "";?> 
                 
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
            <span>Other Option</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">


       <li><a href="<?php echo site_url('ContractorController/listcontractorview');?>"><i class="fa fa-circle-o"></i>List of Contractors</a>
       </li>


       <li><a href="<?php echo site_url('ProjectController/listprojectview');?>"><i class="fa fa-circle-o"></i>List of Projects</a>
       </li>




      </ul>

    </li>
    
    
    </ul>
        
    </section>
    <!-- /.sidebar -->
  </aside>



<form  method="post" action="<?php echo site_url('ProjectController/addproject');?>">

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project Registeration

      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('ProjectController/profile_view');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Register project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Register New Project</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
        
          <div class="form-group">
                  <label for="name">Project Name</label>
                  <input type="text" class="form-control" name="pro_name" placeholder="Name" required>
                </div>
        
          <?php $contractors = $this->Project_Model->getAllGroups();?>

         <div class="form-group">
                  <label for="con_name">Contractor Incharge</label>
                     <select name="contractor" class="form-control">
                            <?php foreach ($contractors as $c) {
                              echo "<option value='"; 
                              echo $c['con_name'];
                              echo "'>";
                              echo $c['con_name'];
                              echo "</option>";
                              echo "\n";
                            }
                            ?> 
                    </select>
         </div>


          <?php $users = $this->Project_Model->getAllUsers();?>

         <div class="form-group">
                  <label for="con_name">Staff Incharge</label>
                     <select name="users" class="form-control">
                            <?php foreach ($users as $c) {
                              echo "<option value='"; 
                              echo $c['username'];
                              echo "'>";
                              echo $c['name'];
                              echo "</option>";
                              echo "\n";
                            }
                            ?> 
                    </select>


         </div>



                <div class="form-group">
                  <label for="begin_date">Project Start Date</label>
                  <input type="date" class="form-control" name="begin_date" placeholder="Project Start Date" required>
                </div>
        
        <div class="form-group">
                  <label for="end_date">Project End Date</label>
                  <input type="date" class="form-control" name="end_date" placeholder="end_date " required>
                </div>

         <div class="form-group">
                  <label for="cost">Cost</label>
                  <input type="text" class="form-control" name="cost" placeholder="(RM)" required>
                </div>

        
        
                  <!-- send role only--><input type="hidden" class="form-control" name="role" placeholder="Role" value="0">
        
        <div class="form-group">
                  <label>Description</label>
                  <div>
                  <input type="text area" class="form-control" name="description" placeholder="Explanation about the project" required>
                </div>
                </div>

      
         
        
        

              </div>
              <!-- /.box-body -->
        <br>
              <!--<div class="box-footer"> -->
        <div>   &nbsp;
        <input type="submit" class="btn btn-primary" name="add" value="Submit"/>
                <!--<button type="submit" class="btn btn-primary pull-right" id="add"> Submit</button>-->
              <!--</div> footer--> 
        <td> 
          <button type="button" class="btn btn-primary" name="cancel"> Cancel</button></a>
        </td>
        </div>
            </form>

      </div>
          <!-- /.box -->
      
        </div>
        <!--/.col (left) -->
    

       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  <!-- starT -->
  
  
  
  <!-- STAFF -->
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
<script src="<?php echo base_url();?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>/plugins/select2/select2.full.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>/dist/js/demo.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();


  });
</script>

</body>
</html>

  
  
