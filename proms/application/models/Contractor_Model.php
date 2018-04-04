<?php
class Contractor_Model extends CI_Model {
 
 function __construct()
    {
          parent::__construct();
		  $this->load->model('Contractor_Model');
    }



    //untuk insert project

    function insertContractorModel($contractor)
    {
		$this->db->insert('contractor', $contractor);	// insert data into `project table` 
		if ($this->db->affected_rows() > 0) {
        return true;
         }
          else {
          return false;
         }		
	}


    // view project

    function viewContractorModel($data)
    {
     $this->db->select('*');
     $this->db->from('contractor');
     $this->db->where('con_id', $data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }


	 //list contra
  /*  function listContractorModel()
    {
    $query = $this->db->get('contractor');
    $result = $query->result_array();
    return $result;
    }*/

     function getAllContractors($data)
    {
     $this->db->select('*');
     $this->db->from('contractor');
     $this->db->where('username',$data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }

      function getAllContractorsAdmin()

    {
        $this->db->select('*');
        $this->db->from('contractor');
        
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


    public function getById($con_id)

                {

                    $query = $this->db->get_where('contractor',array('con_id'=>$con_id));
                    return $query->row_array();

                }   


        public function update_info($p,$con_id)

            {

                    $this->db->where('contractor.con_id',$con_id);

                    return $this->db->update('contractor', $data);

            }
  
	
    
	
	function details($data)
	{
	 $this->db->select('*');
     $this->db->from('users');
     $this->db->where('username', $data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }


     function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
   

   /*function updatestaffmodel($staff_id,$data)
    {
        $this->db->where('id' ,$_id);
        $this->db->update('users', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        else{
            return false;
        }   
    }

    
   // view staff
   function viewstaffModel()
    {
    $query = $this->db->get('users');
    $result = $query->result_array();
    return $result;
    }*/

	
	
	//update project
	function updateContractorModel($con_id,$data)
    {
        $this->db->where('con_id' ,$con_id);
        $this->db->update('contractor', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        else{
            return false;
        }   
    }

    function get_one_contractor($data)
    {
     $this->db->select('*');
     $this->db->from('contractor');
     $this->db->where('con_id', $data);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
    
     }


      function get_one_contractor_admin($data)
    {
     $this->db->select('*');
     $this->db->from('contractor');
     $this->db->where('con_id', $data);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
    
     }
    


	
//delete project
	function delete_contractor_view($con_id) {
        
        $this->db->where('con_id' ,$con_id);
        $this->db->delete('contractor');
        
    }

   

   
   //update project
      function update_contractor($con_id,$data)
    {
        $this->db->where('con_id' ,$con_id);
        $this->db->update('contractor', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        else{
            return false;
        }   
    }

    public function update_contractor_controller()
    {
        if($this->input->post('update')==true)
        {
            $con_id=$this->input->post('con_id');
            //create data
            $data = array(
               'con_id'=>$this->input->post('con_id'),
                'con_name'=>$this->input->post('con_name'),
                'con_licensenumber'=>$this->input->post('con_licensenumber'),
                'con_phone'=>$this->input->post('con_phone'),
                'con_email'=>$this->input->post('con_email'),
                'con_address'=>$this->input->post('con_address'),
                'con_class'=>$this->input->post('con_class'),
                'id'=>$this->input->post('id'),
            );
            // table column name should be same as data object key name
        $result = $this->Contractor_Model->update_contractor_model($con_id,$data); // call the employee model
        
        if($result==true)
           {
               echo '<script>alert("You Have Successfully updated this Record!");</script>';
               redirect('ContractorController/List_Contractor_view', 'refresh');
           }
           else{
               echo '<script>alert("Record is not Updated!");</script>';
               redirect('ContractorController/update_contractor_view', 'refresh');
           }
        
        
        }
    }


    public function update_contractor_controllerAdmin()
    {
        if($this->input->post('update')==true)
        {
            $con_id=$this->input->post('con_id');
            //create data
            $data = array(
               'con_id'=>$this->input->post('con_id'),
                'con_name'=>$this->input->post('con_name'),
                'con_licensenumber'=>$this->input->post('con_licensenumber'),
                'con_phone'=>$this->input->post('con_phone'),
                'con_email'=>$this->input->post('con_email'),
                'con_address'=>$this->input->post('con_address'),
                'con_class'=>$this->input->post('con_class'),
                'id'=>$this->input->post('id'),
            );
            // table column name should be same as data object key name
        $result = $this->Contractor_Model->update_contractor_model($con_id,$data); // call the employee model
        
        if($result==true)
           {
               echo '<script>alert("You Have Successfully updated this Record!");</script>';
               redirect('ContractorController/List_Contractor_view_Admin', 'refresh');
           }
           else{
               echo '<script>alert("Record is not Updated!");</script>';
               redirect('ContractorController/update_contractor_view_admin', 'refresh');
           }
        
        
        }
    }

  
 
 
		
  				
				
	
	}
		

?>