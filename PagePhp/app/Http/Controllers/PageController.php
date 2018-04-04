<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function viewPage($id)
   {
      
      $data ['p'] = $id;
      $this->load->view('page',$data);
      
   }

   public function addPage()
   {

   }

   public function deletePage()
   {

   }

   public function editPage()
   {
   	
   }
   
}


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

   public function addPage()
    {
      if ($this->input->post('add')==true)
        {
      $this->load->helper('date');
       // create data
      $contractor = array(
         
            'id'      => $this->input->post('con_id'),
            'pageName'      => $this->input->post('con_name'),
            ''          => $this->input->post('con_phone'),
            'con_email'          => $this->input->post('con_email'),
            'con_address' => $this->input->post('con_address'),
            'con_class'=> $this->input->post('con_class'), 

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