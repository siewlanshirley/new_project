<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_Model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $sql = "select * from users where username = '" . $usr . "' and password = '" . md5($pwd)."'";
          $query = $this->db->query($sql);
          return $query->num_rows();
     }
   
    function get_role($usr, $pwd)
     {
          $sql = "select * from users  where username = '" . $usr . "' and password = '" . md5($pwd)."'";
          $query = $this->db->query($sql);
      foreach ($query->result() as $row)
      {
        return $row->role;
      }

     }

     function get_id($usr, $pwd)
     {
          $sql = "select * from users  where username = '" . $usr . "' and password = '" . md5($pwd)."'";
          $query = $this->db->query($sql);
      foreach ($query->result() as $row)
      {
        return $row->id;
      }
    

  }


   // untuk add user
  
    function insertUserModel($users)
    {
    $this->db->insert('users', $users); // insert data into useer table` 
    if ($this->db->affected_rows() > 0) {
        return true;
         }
          else {
          return false;
         }    
  }

 
  //list of user

 function listUserModel()
    {
    $query = $this->db->get('users');
    $result = $query->result_array();
    return $result;
    }
 

  // update user


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

    function getone($data)
    {
   $this->db->select('*');
     $this->db->from('users');
     $this->db->where('id', $data);
     $query = $this->db->get();
     $result = $query->result();
     return $result;
  
     }




  // view user

      function viewStaffModel($data)
    {
     $this->db->select('*');
     $this->db->from('users');
     $this->db->where('id',$data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }


    // untuk kluarkan based on username

    
     function getAllStaffs($data)
    {
     $this->db->select('*');
     $this->db->from('users');
     $this->db->where('username',$data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }

    //list staff untuk admin

     function getAllStaffsAdmin()
    {
     $this->db->select('*');
     $this->db->from('users');
    
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }




    // delete user

    function delete_staff_view($id) {
        
        $this->db->where('id' ,$id);
        $this->db->delete('users');
        
    }

 
     function get_grade($a,$b)

      {
          $sql = "select * from users  where username = '" . $a . "' and password = '" . md5($b)."'";
          $query = $this->db->query($sql);
            foreach ($query->result() as $row)
               {
                    return $row->grade;
               }

     }
  }

?>