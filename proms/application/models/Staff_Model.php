<?php
Class Staff_Model extends CI_Model
{
 function login($id, $password)
 {
   $this -> db -> select('name, id, password, grade');
   $this -> db -> from('users');
   $this -> db -> where('id', $id);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>