<?php
class Milestones_Model extends CI_Model {
 
 function __construct()
    {
          parent::__construct();
          $this->load->model('Milestones_Model');
    }

    function getAllMilestones()
    {
        $this->db->select('*');
        $this->db->from('milestones');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }


    function insertcomment($milestones)
    {
        $this->db->insert('milestones', $milestones); // insert data into `project table` 
        if ($this->db->affected_rows() > 0) {
        return true;
         }
          else {
          return false;
         }      
    }


   
     function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
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


     function getAllProjectsAdmin()

    {
        $this->db->select('*');
        $this->db->from('project');
        
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }



     
    //progress

     function getAllProgressAdmin()

    {
        $this->db->select('*');
        $this->db->from('project');
        
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    // view milestones

    function viewMilestonesModel($data)
    {
     $this->db->select('*');
     $this->db->from('milestones');
     $this->db->where('mile_id', $data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }


    //view comment

    
function viewCommentModel($data)
    {
     $this->db->select('*');
     $this->db->from('project');
     $this->db->where('pro_id', $data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }

function viewProgressModel($data)
    {
       $this->db->select('*');
     $this->db->from('project');
     $this->db->where('pro_id', $data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }

    //insert progress

   function insertProgressmodel($project)
    {
        $this->db->insert('project', $project);   // insert data into `project table` 
        if ($this->db->affected_rows() > 0) {
        return true;
         }
          else {
          return false;
         }      
    }


  function updateProgressModel($pro_id,$data)
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


    //comment

     function updateCommentModel($pro_id,$data)
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


    function get_one_progress($data)
    {
     $this->db->select('*');
     $this->db->from('project');
     $this->db->where('pro_id', $data);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
    
     }

      function get_one_comment($data)
    {
     $this->db->select('*');
     $this->db->from('project');
     $this->db->where('pro_id', $data);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
    
     }

     function getAllGroups()
    {
        $this->db->select('*');
        $this->db->from('contractor');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }




}
?>