<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectController extends CI_Controller {

	 public function __construct() 
	 {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();

          //load the login model
          $this->load->model('Project_Model');
      }


	//function untuk keluarkan page untuk view project

      public function view_project($pro_id)
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$data ['p'] = $pro_id;
		$this->load->view('view_project',$data);
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}
   
    public function view_project_admin($pro_id)
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$data ['p'] = $pro_id;
		$this->load->view('view_project_admin',$data);
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}
    

	
    //function untuk kluarkan page untuk list project

	public function listprojectview()
    
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$this->load->view('List_Project_view');
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}

	public function listprojectviewAdmin()
    
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$this->load->view('List_Project_view_Admin');
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}


	

	// view untuk user after success login
	public function profile_view()
    
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$this->load->view('staff_profile');
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}

	
    
    //add project function

     public function addproject()
    
	{
		
	if ($this->input->post('add')==true)
        {
		$this->load->helper('date');
       // create data
		$projects = array(
		   
				'pro_id'      => $this->input->post('pro_id'),
				'pro_name'      => $this->input->post('pro_name'),
                'begin_date'        => date('Y-m-d H:i:s'),
				'end_date'         => date('Y-m-d H:i:s') ,
				
				'description' => $this->input->post('description'),
				'cost'=> $this->input->post('cost'),
				'con_name'=> $this->input->post('contractor'),	
				'username'=> $this->input->post('users'),

		);
		


    
       // $data['title']= 'Warehouse - Delivery';
        $data['contractor'] = $this->Project_Model->getAllGroups();
         $data['users'] = $this->Project_Model->getAllUsers();
        //I take here a sample view, you can put more view pages here
        

    
			// table column name should be same as data object key name
			 $result = $this->Project_Model->insertprojectmodel($projects); // call the project model
	          if($result==true)
	            {
	               echo '<script>alert("You Have Successfully register this project!");</script>';
	               redirect( 'ProjectController/listprojectview','refresh');
	           }
	           else
	           {
	               echo '<script>alert("Record does not register!");</script>';
	              redirect('ProjectController/addproject','refresh');
	            }
	    } else {

		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$this->load->view('addproject');
		}
		else {
			redirect(base_url(''),'refresh');
		}
		}
	}

	public function addaproject()
    {
		if ($this->input->post('add')==true)
        {
		$this->load->helper('date');
       // create data
		$projects = array(
		   
				'pro_id'      => $this->input->post('pro_id'),
				'pro_name'      => $this->input->post('pro_name'),
                'begin_date'        => date('Y-m-d H:i:s'),
				'end_date'         => date('Y-m-d H:i:s') ,
				
				'description' => $this->input->post('description'),
				'cost'=> $this->input->post('cost'),	

		);
		


    
       // $data['title']= 'Warehouse - Delivery';
        $data['contractor'] = $this->Project_Model->getAllGroups();
         $data['users'] = $this->Project_Model->getAllUsers();
        //I take here a sample view, you can put more view pages here
        

    
			// table column name should be same as data object key name
			 $result = $this->Project_Model->insertprojectmodel($projects); // call the project model
	          if($result==true)
	            {
	               echo '<script>alert("You Have Successfully register this project!");</script>';
	               redirect( 'ProjectController/listprojectview','refresh');
	           }
	           else
	           {
	               echo '<script>alert("Record does not register!");</script>';
	              redirect('ProjectController/addproject','refresh');
	            }
	    }
   }


   



    //delete function untuk project 

	public function delete_project_view($pro_id)
	{
		
		$this->Project_Model->delete_project_view($pro_id);
		
		$this->load->view('List_Project_view');
	}


	public function deleteProjectController()
    {
        if ($this->input->post('delete')==true)
        {
            $pro_id = $this->input->post('pro_id');
       
		// table column name should be same as data object key name
		 $result = $this->model->delete_project_view($pro_id); // call the employee model
          if($result==true)
           {
               echo '<script>alert("You Have Successfully deleted this Record!");</script>';
               redirect('ProjectController/delete_project_view', 'refresh');
           }
           else{
               echo '<script>alert("Record does not deleted!");</script>';
               redirect('ProjectController/delete_project_view', 'refresh');
           }
        
        
		}
	}


	    //update 
	public function update_project_view($pro_id)   
	{
		$pro_id = $this->uri->segment(3);
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$data ['p'] = $pro_id;
		
		$this->load->view('update_project_view',$data);
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}

	public function update_project_view_admin($pro_id)   
	{
		$pro_id = $this->uri->segment(3);
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$data ['p'] = $pro_id;
		
		$this->load->view('update_project_view_admin',$data);
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}
	

	
	public function updateProjectController()
	{
		if($this->input->post('update')==true)
		{
			$pro_id=$this->input->post('pro_id');

			

			//create data
			$data = array(
				'pro_name'      => $this->input->post('pro_name'),
				'begin_date' => $this->input->post('begin_date'),
				'end_date'    => $this->input->post('end_date'),
				
				'description'  => $this->input->post('description'),
				'cost'        => $this->input->post('cost'),
				
			
			);

		 // table column name should be same as data object key name
		 $result = $this->Project_Model->updateProjectModel($pro_id,$data); // call the employee model

		 
          if($result==true)
           {
               echo '<script>alert("You Have Successfully updated this Record!");</script>';
               redirect('ProjectController/listprojectview', 'refresh');
           }
           else{
               echo '<script>alert("Record is not Updated!");</script>';
               $uri = "ProjectController/update_project_view/".$pro_id;
               redirect($uri, 'refresh');
               
           }
        
        
		}
		
	}



	public function updateProjectControllerAdmin()
	{
		if($this->input->post('update')==true)
		{
			$pro_id=$this->input->post('pro_id');

			

			//create data
			$data = array(
				'pro_name'      => $this->input->post('pro_name'),
				'begin_date' => $this->input->post('begin_date'),
				'end_date'    => $this->input->post('end_date'),
				
				'description'  => $this->input->post('description'),
				'cost'        => $this->input->post('cost'),
				'con_name'        => $this->input->post('contractor'),
				'username'        => $this->input->post('users'),
			
			);

		 // table column name should be same as data object key name
		 $result = $this->Project_Model->updateProjectModel($pro_id,$data); // call the employee model

		 
          if($result==true)
           {
               echo '<script>alert("You Have Successfully updated this Record!");</script>';
               redirect('ProjectController/listprojectviewAdmin', 'refresh');
           }
           else{
               echo '<script>alert("Record is not Updated!");</script>';
               $uri = "ProjectController/update_project_view_admin/".$pro_id;
               redirect($uri, 'refresh');
               
           }
        
        
		}
		
	}

	//update staff profile



	public function update_staff_view($id,$data)
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$data ['p'] = $id;
		$this->load->view('update_staff_view',$data);
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}

	
	public function updateStaffController()

			{

				if($this->input->post('update')==true)

				{

					$id=$this->input->post('id');

					$curpswd = $this->input->post('curpswd');
					$newpswd = $this->input->post('password');

					if($curpswd == $newpswd){

						$data = array(
						'name' => $this->input->post('name'),
						'id' => $this->input->post('id'),
						'username' => $this->input->post('username'),
						'grade' => $this->input->post('grade'),
						'role'       => $this->input->post('role'),
						'phone'       => $this->input->post('phone'),
						'email'       => $this->input->post('email')
						);
					}
					else{
						$data = array(
						'name' => $this->input->post('name'),
						'id' => $this->input->post('id'),
						'password' => md5($this->input->post('password')),
						'username' => $this->input->post('username'),
						'grade' => $this->input->post('grade'),
						'role'       => $this->input->post('role'),
						'phone'       => $this->input->post('phone'),
						'email'       => $this->input->post('email')
						);
					}

				// table column name should be same as data object key name
				$result = $this->Project_Model->updateStaffModel($id,$data); // call the employee model
		
				if($result==true)

		           {

			               echo '<script>alert("You Have Successfully updated this Record!");</script>';
			               redirect('ProjectController/staff_profile', 'refresh');

		           }

           		else

           			{
			               echo '<script>alert("Record is not Updated!");</script>';
			               redirect('ProjectController/update_staff_view', 'refresh');
           			}
        
        
				}

			}


   



	
		
   
    }
?>
        
	