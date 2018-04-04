<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct()
	  {

	  	parent::__construct();
	      $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();

          //load the login model
          $this->load->model('Login_Model');

      }
	   
	   // untuk kluarkan list user for staff
	public function list_user_view()

	{
	 $this->load->view('List_Staff_view');
	}

         
     public function list_user_view_admin()
	{

    $data['users'] = $this->Login_Model->getAllStaffsAdmin();
    
    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $this->load->view('List_Staff_view_Admin');
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }
	// function untuk kluarkan page add user
		public function add_staff_view()

			{
				$this->load->view('addUser');
			}



	// function untuk add user
		 public function adduser()
    
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL){
		$this->load->view('addUser');
		}
		else {
			redirect(base_url(''),'refresh');
		}
	}
  

  	public function addauser()
      {
		if ($this->input->post('add')==true)
        {
		$this->load->helper('url');
       // create data
		$users = array(
		   
				'id'      => $this->input->post('id'),
				'name'      => $this->input->post('name'),
				'username'      => $this->input->post('username'),
                'password'    => md5($this->input->post('password')),
				'email' => $this->input->post('email'),
				'grade' => $this->input->post('grade'),
				'role'=> $this->input->post('role'),	
				'phone'=> $this->input->post('phone'),	


		);
		
		// table column name should be same as data object key name
		 $result = $this->Login_Model->insertUserModel($users); // call the employee model
          if($result==true)
            {
               echo '<script>alert("You Have Successfully Registered!");</script>';
               redirect( 'LoginController/success_user','refresh');
           }
           else
           {
               echo '<script>alert("Sorry Please Try Again!");</script>';
              redirect('LoginController/add_staff_view','refresh');
            }
        }
    }

		


		// Update function

		public function update_staff_view($id)

			{
				$data ['s'] = $id;
				$this->load->view('update_staff_view',$data);
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
				$result = $this->Login_Model->updateStaffModel($id,$data); // call the employee model
		
				if($result==true)

		           {

			               echo '<script>alert("You Have Successfully updated this Record!");</script>';
			               redirect('LoginController/list_user_view', 'refresh');

		           }

           		else

           			{
			               echo '<script>alert("Record is not Updated!");</script>';
			               redirect('LoginController/update_staff_view', 'refresh');
           			}
        
        
				}

			}




		
	
	
	    // page yg user akan view bila dia successfully register
		
		public function success_user()

			{
				$this->load->view('Login_View');
			}


			// logout 

	 	function logout() 

	 	{

			// Removing session data
			$sess_array = array(
				'username' 	   => '',
				'password'	   	   => '',
				);

				$this->session->unset_userdata('logged_in', $sess_array);
				$this->session->sess_destroy();
				redirect(base_url(''),'refresh');
				//$this->load->view('login_view', 'refresh');
		}
		

		//view for staff


      public function view_staff($id)
	{
		 $a = $this->session->userdata('username');
	    if ($a !== NULL){
	    	$data ['p'] = $id;
	    $this->load->view('view_staff',$data);
	    }
	    else {
	      redirect(base_url(''),'refresh');
	    }
	}


	 public function view_staff_admin($id)
	{
		 $a = $this->session->userdata('username');
	    if ($a !== NULL){
	    	$data ['p'] = $id;
	    $this->load->view('view_staff_admin',$data);
	    }
	    else {
	      redirect(base_url(''),'refresh');
	    }
	}
	
			
	
	 	//delete function 

    	public function delete_staff_view($id)
	{
		
		$this->Login_Model->delete_staff_view($id);
		
		$this->load->view('List_Staff_view');
	}


	public function deleteStaffController()
    {
        if ($this->input->post('delete')==true)
        {
            $id = $this->input->post('id');
       
		// table column name should be same as data object key name
		 $result = $this->model->delete_staff_view($id); // call the employee model
          if($result==true)
           {
               echo '<script>alert("You Have Successfully deleted this Record!");</script>';
               redirect('LoginController/delete_staff_view', 'refresh');
           }
           else{
               echo '<script>alert("Record does not deleted!");</script>';
               redirect('LoginController/delete_staff_view', 'refresh');
           }
        
        
		}
	}

				
		
}
?>
