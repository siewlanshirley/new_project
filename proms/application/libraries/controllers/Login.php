<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
		  $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		  $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		  $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		  $this->output->set_header('Pragma: no-cache');
		
		  
		     

          //load the login model
          $this->load->model('Login_Model');
     }

     public function index()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");
          $grade= $this->Login_Model->get_grade($username, $password);

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('Login_View');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->Login_Model->get_user($username, $password);
				$role = $this->Login_Model->get_role($username,$password);
                    $id = $this->Login_Model->get_id($username,$password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
						'role' => $role,
                              'grade' => $grade,
                              'id'=>$id,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);

                        

                         if($role == '0')
                             {
                         redirect("ProjectController/profile_view");
                             }
                              
                         else if ($role == '1'){
                         redirect("MilestonesController/listmilestonesviewAdmin");
                              }

                    }
						 
                    
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('Login/index');
                    }
               }
               
          }
 function home_view()
	{
	  		  
		 $this->load->view('list_project_view'); 
     }
	 }
	 
 function logout() {

	// Removing session data
	$sess_array = array(
		'username' 	   => '',
		'password'	   	   => '',
		);

		$this->session->unset_userdata('logged_in', $sess_array);
		$this->session->sess_destroy();
		$data['message_display'] = 'logout';
		redirect(base_url(''),'refresh');
		//$this->load->view('login_view', 'refresh');
		}
		

}

		

		
?>