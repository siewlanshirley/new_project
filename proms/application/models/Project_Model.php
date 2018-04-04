<?php
class Project_Model extends CI_Model {
 
 function __construct()
    {
          parent::__construct();
		  $this->load->model('Project_Model');
    }



    //untuk insert project

    function insertProjectModel($project)
    {
		$this->db->insert('project', $project); // insert data into `project table` 

        /*$contractor['id'] = $this ->db->insert_id('id'); //insert data into table contractor

        $this ->db->insert('contractor', $contractor);*/

		if ($this->db->affected_rows() > 0) {
        return true;
         }
          else {
          return false;
         }		
	}

   

     



    function getAllGroups()
    {
        $this->db->select('*');
        $this->db->from('contractor');
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
   

    // view project

    function viewProjectModel($data)
    {
     $this->db->select('*');
     $this->db->from('project');
     $this->db->where('pro_id', $data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }



    //list user

    function listUserModel()
    {
    $query = $this->db->get('users');
    $result = $query->result_array();
    return $result;
    }



    //user

     function getone($data)
    {
   $this->db->select('*');
     $this->db->from('users');
     $this->db->where('id', $data);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
  
     }



     //update staff

      function updateStaffModel($id,$data)
  {
    $this->db->where('id' ,$id);
    $this->db->update('users', $data);
    if ($this->db->affected_rows() > 0) {
    return true;
      }
      else{
      return false;
    } 
  }


    
	 //list project
    
  
	function listProjectModel()
    {
    $query = $this->db->get('project');
    $result = $query->result_array();
    return $result;
    }
     
    function getAllProjects($data)
    {
     $this->db->select('*');
     $this->db->from('project');
     $this->db->where('username',$data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }



    public function getById($pro_id)

                {

                    $query = $this->db->get_where('project',array('pro_id'=>$pro_id));
                    return $query->row_array();

                }   


        public function update_info($p,$pro_id)

            {

                    $this->db->where('project.pro_id',$pro_id);

                    return $this->db->update('project', $data);

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



   

   

	
	
	//update project
	function updateProjectModel($pro_id,$data)
    {
        $this->db->where('pro_id' ,$pro_id);
        $this->db->update('project', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        else{
            return false;
        }   
    }

    function get_one_project($data)
    {
     $this->db->select('*');
     $this->db->from('project');
     $this->db->where('pro_id', $data);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
    
     }
    


	
//delete project
	function delete_project_view($pro_id) {
        
        $this->db->where('pro_id' ,$pro_id);
        $this->db->delete('project');
        
    }

   

   
   //update project
      function update_project($pro_id,$data)
    {
        $this->db->where('pro_id' ,$pro_id);
        $this->db->update('project', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        else{
            return false;
        }   
    }
				
	
	}
		

?>