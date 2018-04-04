<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
defined('BASEPATH') OR exit('No direct script access allowed');

class MilestonesController extends CI_Controller {

	  public function __construct() 
   {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();

          //load the  model
          $this->load->model('Milestones_Model');
      }


     // function untuk kluarkan timeline page

     public function listmilestonesview()
    
	{

    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $this->load->view('Milestones_view');
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }

  /*public function updateprogressuser($pro_id)
    
  {
    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $data ['p'] = $pro_id;
    $this->load->view('update_progress_user',$data);
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }

  public function updateprogressuseradd()
    {
    if ($this->input->post('add')==true)
        {
    $this->load->helper('date');
       // create data
    $milestones = array(
       
        
        
        'updateProgress'          => $this->input->post('project'), 

    );

      // table column name should be same as data object key name
       $result = $this->Milestones_Model->updateProgressModel($data); // call the project model
            if($result==true)
              {
                 echo '<script>alert("You Have Successfully Update the project progress!");</script>';
                 redirect( 'MilestonesController/listmilestonesview','refresh');
             }
             else
             {
                 echo '<script>alert("Comment does not update!");</script>';
                redirect('MilestonesController/updateprogressuser','refresh');
              }
      }
   }*/



   public function listmilestonesviewAdmin()
    
  {

    $data['project'] = $this->Milestones_Model->getAllProjectsAdmin();

    /* $data['milestones'] = $this->Milestones_Model->getAllProgressAdmin();*/


    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $this->load->view('Milestones_view_admin');
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }


  //view comment page

  public function view_comment($pro_id)
  {
    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $data ['p'] = $pro_id;
    $this->load->view('milestoneComment',$data);
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }

  

  
   //update progress
 public function update_progress_view($pro_id)   
  {
    $pro_id = $this->uri->segment(3);
    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $data ['p'] = $pro_id;
    
    $this->load->view('update_progress_user',$data);
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }



 public function Update_Progress_Controller()
  {
    if($this->input->post('update')==true)
    {
      $pro_id=$this->input->post('pro_id');

      //create data
      $data = array(
        
        'updateProgress'        => $this->input->post('updateProgress'),
      
      );

     // table column name should be same as data object key name
     $result = $this->Milestones_Model->updateProgressModel($pro_id,$data); // call the employee model

     
          if($result==true)
           {
               echo '<script>alert("You Have Successfully update your progress!");</script>';
               redirect('MilestonesController/listmilestonesview', 'refresh');
           }
           else{
               echo '<script>alert("Record is not Updated!");</script>';
               $uri = "MilestonesController/update_progress_view/".$pro_id;
               redirect($uri, 'refresh');
               
           }
        
        
    }
    
  }

  //update comment

 public function update_comment_view($pro_id)   
  {
    $pro_id = $this->uri->segment(3);
    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $data ['p'] = $pro_id;
    
    $this->load->view('milestoneComment',$data);
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }



 public function Update_Comment_Controller()
  {
    if($this->input->post('update')==true)
    {
      $pro_id=$this->input->post('pro_id');

      //create data
      $data = array(
        
          'comment'        => $this->input->post('comment'),
           'progress'        => $this->input->post('progress'),
      
      );

     // table column name should be same as data object key name
     $result = $this->Milestones_Model->updateCommentModel($pro_id,$data); // call the employee model

     
          if($result==true)
           {
               echo '<script>alert("You Have Successfully update your progress!");</script>';
               redirect('MilestonesController/listmilestonesviewAdmin', 'refresh');
           }
           else{
               echo '<script>alert("Record is not Updated!");</script>';
               $uri = "MilestonesController/update_comment_view/".$pro_id;
               redirect($uri, 'refresh');
               
           }
        
        
    }
    
  }


   
 }
?>