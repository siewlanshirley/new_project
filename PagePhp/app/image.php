<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table= "image"; 


    function viewPage($data)
    {
     $this->db->select('*');
     $this->db->from('tblPage');
     $this->db->where('id', $data);
     $query = $this->db->get();
     $result = $query->result_array();
     return $result;
    }
}
