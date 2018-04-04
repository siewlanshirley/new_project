<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PROMS | Project Data</title>
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

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
      <span class="logo-mini"><b>KK</b>LW</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KK</b>LW</span>
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
             <span class="hidden-xs"> <?php echo  $this->session->userdata['username'] . "";?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">


                <p>
        Welcome
        <p>
                 <?php echo  $this->session->userdata['username'] . "";?>
                 
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
          <img src="<?php echo base_url();?>/dist/img/avatar3.png" class="img-circle" alt="User Image">
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
                 <span>Manage Project</span>
                      <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
                      </span>
          </a>
      <ul class="treeview-menu">
         <li>
            <a href="<?php echo site_url('ProjectController/listprojectview');?>"><i class="fa fa-circle-o"></i> List Of The Project</a></li>

          <li><a href="<?php echo site_url('ProjectController/addproject');?>"><i class="fa fa-circle-o"></i> Register New Project</a></li>


          
      </ul>
      </li>




      <li>
      <a href="<?php echo site_url('ProjectController/profile_view');?>">

            <i class="fa fa-table"></i> 
                 <span>Manage Contractor</span>
                      <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
                      </span>
          </a>
      <ul class="treeview-menu">
         <li>
            <a href="<?php echo site_url('ContractorController/listcontractorview');?>"><i class="fa fa-circle-o"></i> List Of The Contractor</a></li>

          <li><a href="<?php echo site_url('ContractorController/addcontractor');?>"><i class="fa fa-circle-o"></i> Register New Contractor</a></li>
      </ul>
      </li>
    
      <li class="treeview">
          <a href="<?php echo site_url('LoginController/List_Staff_view');?>">
          
            <i class="fa fa-edit"></i> 
      <span>Manage Profile</span>
            <span class="pull-right-container">
       <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
       <li><a href="<?php echo site_url('LoginController/list_user_view');?>"><i class="fa fa-circle-o"></i> Update Profile</a></li>
     
          </ul>
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
        Timeline
      
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo site_url('ProjectController/profile_view');?>"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo site_url('ProjectController/addproject');?>">Insert Project</a></li>
        <li class="active">Projects list</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
              <li class="time-label">
                  <span class="bg-red">
                    17 June 2017
                  </span>
              </li>
            
            <li>
              <?php $a = $this->session->userdata('username');
                $MilestonesController = $this->Milestones_Model->getAllProjects($a);?>
                <?php foreach($MilestonesController as $c): ?>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 10:05</span>
              
                   <h3 class="timeline-header"><a href="#"><?php echo $c['pro_name']; ?> by <?php echo $c['username']; ?> </a></h3>

                       <div class="timeline-body">
                            &nbsp <button type="submit" class="btn btn-danger" name="view" align="right"> Progress </button> <?php echo $c['updateProgress']; ?>
                       </div>

                       <div class="timeline-body">
                             &nbsp <button type="submit" class="btn btn-danger" name="view" align="right">Comment </button> <?php echo $c['comment'];  ?>
                       </div>


                        <div class="progress progress-xs progress-striped active">
                             <div class="progress-bar progress-bar-success" style="width:<?php echo $c['progress']; ?>">
                                    <span class="badge bg-blue"><?php echo $c['progress']; ?></span>
                             </div>
                        </div>



                         <div class="timeline-footer">
                              <class="btn btn-primary btn-xs" >
                              <a href="<?php echo site_url("MilestonesController/update_progress_view/{$c['pro_id']}") ?>" onClick="return confirm('Are you sure to update this records?') ;"?>
                         <button type="submit" class="btn btn-primary" name="view" align="right"> Update Progress</button></a>
                        </div>
                    </div><br>
                 <?php endforeach; ?>
              </div><!--timeline item-->
            </li>
        
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

                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    
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
