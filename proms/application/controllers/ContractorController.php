<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
defined('BASEPATH') OR exit('No direct script access allowed');

class ContractorController extends CI_Controller {

	 public function __construct() 
	 {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();

          //load the login model
          $this->load->model('Contractor_Model');
      }



	//function untuk keluarkan page untuk view contractor

      public function view_contractor($con_id)
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL)
		{
		$data ['p'] = $con_id;
		$this->load->view('view_contractor',$data);
		}
		else 
		{
			redirect(base_url(''),'refresh');
		}
	}
   
    public function view_contractor_admin($con_id)
	{
		 $a = $this->session->userdata('username');
	    if ($a !== NULL){
	    	$data ['p'] = $con_id;
	    $this->load->view('view_contractor_admin',$data);
	    }
	    else {
	      redirect(base_url(''),'refresh');
	    }
	}
    

	
    //function untuk kluarkan page untuk list contractor

	
public function listcontractorview()
    
	{

    $a = $this->session->userdata('username');
    if ($a !== NULL){
    $this->load->view('List_Contractor_view');
    }
    else {
      redirect(base_url(''),'refresh');
    }
  }

	public function listcontractorviewAdmin()
    
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL)
		{
		$this->load->view('List_Contractor_view_Admin');
		}
		else 
		{
			redirect(base_url(''),'refresh');
		}
	}

	// view untuk user after success login
	public function profile_view()
    
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL)
		{
		$this->load->view('staff_profile');
		}
		else
		 {
			redirect(base_url(''),'refresh');
		}
	}

	
    
    //add project function

     public function addcontractor()
    
	{
		$a = $this->session->userdata('username');
		if ($a !== NULL)
		{
		$this->load->view('addContractor');
		}
		else 
		{
			redirect(base_url(''),'refresh');
		}
	}

	public function addacontractor()
    {
		if ($this->input->post('add')==true)
        {
		$this->load->helper('date');
       // create data
		$contractor = array(
		   
				'con_id'      => $this->input->post('con_id'),
				'con_name'      => $this->input->post('con_name'),
                'con_licensenumber' => $this -> input -> post('con_licensenumber'),
				'con_phone'          => $this->input->post('con_phone'),
				'con_email'          => $this->input->post('con_email'),
				'con_address' => $this->input->post('con_address'),
				'con_class'=> $this->input->post('con_class'),	
				 
				'username'=> $this->input->post('users'),	

		);



			 $data['users'] = $this->Contractor_Model->getAllUsers();
			// table column name should be same as data object key name
			 $result = $this->Contractor_Model->insertcontractormodel($contractor); // call the project model
	          if($result==true)
	            {
	               echo '<script>alert("You Have Successfully Register New Contractor!");</script>';
	               redirect( 'ContractorController/listcontractorview','refresh');
	           }
	           else
	           {
	               echo '<script>alert("Contractor Failed To Register!");</script>';
	              redirect('ContractorController/addcontractor','refresh');
	            }
	    }
   }


   



    //delete function untuk project 

	public function delete_contractor_view($con_id)
	{
		
		$this->Contractor_Model->delete_contractor_view($con_id);
		
		$this->load->view('List_Contractor_view');
	}


	public function deleteContractorController()
    {
        if ($this->input->post('delete')==true)
        {
            $con_id = $this->input->post('con_id');
       
		// table column name should be same as data object key name
		 $result = $this->model->delete_contractor_view($con_id); // call the employee model
          if($result==true)
           {
               echo '<script>alert("Contractor Successfully Deleted!");</script>';
               redirect('ContractorController/delete_contractor_view', 'refresh');
           }
           else{
               echo '<script>alert("Failed To Delete Contractor!");</script>';
               redirect('ContractorController/delete_contractor_view', 'refresh');
           }
        
        
		}
	}


	    //update 
	public function update_contractor_view()   
	{
		$con_id = $this->uri->segment(3);
		$a = $this->session->userdata('username');
		if ($a !== NULL)
		{
		$data ['p'] = $con_id;
		
		$this->load->view('update_contractor_view',$data);
		}
		else 
		{
			redirect(base_url(''),'refresh');
		}
	}
	
	public function update_contractor_view_admin()   
	{
		$con_id = $this->uri->segment(3);
		$a = $this->session->userdata('username');
		if ($a !== NULL)
		{
		$data ['p'] = $con_id;
		
		$this->load->view('update_contractor_view_admin',$data);
		}
		else 
		{
			redirect(base_url(''),'refresh');
		}
	}
	


	
	public function updateContractorController()
	{
		if($this->input->post('update')==true)
		{
			$con_id=$this->input->post('con_id');

						//create data
						$data = array(
							'con_name'      => $this->input->post('con_name'),
							'con_licensenumber' => $this->input->post('con_licensenumber'),
							'con_phone'    => $this->input->post('con_phone'),
							'con_email' => $this->input->post('con_email'),
							'con_address'  => $this->input->post('con_address'),
							'con_class'        => $this->input->post('con_class'),
							
						
						);
					}

			

			
			// table column name should be same as data object key name
		 $result = $this->Contractor_Model->updateContractorModel($con_id,$data); // call the employee model

		 
          if($result==true)
           {
               echo '<script>alert("You Have Successfully Updated This Contractor!");</script>';
               redirect('ContractorController/listcontractorview', 'refresh');
           }
           else{
               echo '<script>alert("Contractor Record Is Not Updated!");</script>';
               $uri = "ContractorController/update_contractor_view/".$con_id;
               redirect($uri, 'refresh');
               
           }
        
        
		}

	public function updateContractorControllerAdmin()
	{
		if($this->input->post('update')==true)
		{
			$con_id=$this->input->post('con_id');

						//create data
						$data = array(
							'con_name'      => $this->input->post('con_name'),
							'con_licensenumber' => $this->input->post('con_licensenumber'),
							'con_phone'    => $this->input->post('con_phone'),
							'con_email' => $this->input->post('con_email'),
							'con_address'  => $this->input->post('con_address'),
							'con_class'        => $this->input->post('con_class'),
							'username'        => $this->input->post('users'),
						
						);
					}

			

			
			// table column name should be same as data object key name
		 $result = $this->Contractor_Model->updateContractorModel($con_id,$data); // call the employee model

		 
          if($result==true)
           {
               echo '<script>alert("You Have Successfully Updated This Contractor!");</script>';
               redirect('ContractorController/listcontractorviewAdmin', 'refresh');
           }
           else{
               echo '<script>alert("Contractor Record Is Not Updated!");</script>';
               $uri = "ContractorController/update_contractor_view_admin/".$con_id;
               redirect($uri, 'refresh');
               
           }
        
        
		}


	}


		
?>	