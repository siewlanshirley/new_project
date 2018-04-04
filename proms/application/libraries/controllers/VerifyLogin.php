<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {

    function run($module = '', $group = '')
    {
       (is_object($module)) AND $this->CI = &$module;
        return parent::run($group);
    }
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('staff','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
  $this->form_validation->set_rules('staff_id', 'staff_id');
  $this->form_validation->set_rules('password', 'password', 'callback_check_database');
 
 
   if($this->form_validation->run($this) == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $staff_id = $this->input->post('staff_id');
 
   //query the database
   $result = $this->staff->login($staff_id, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'name' => $row->name,
         'staff_id' => $row->staff_id,
		 'password' => $row->password,
		 'department' => $row->department,
		 'date_reg' => $row->date_reg
		 
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>