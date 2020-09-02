<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myAccount extends CI_Controller{
    
    public function index(){
      
                 
        
        
          $this->load->library('session');
      $userName = $this->session->userdata('Username');
      $userid = $this->session->userdata('Id');
      $email = $this->session->userdata('Email');
      $name = $this->session->userdata('Name');
      

         $this->load->helper('url');
         $this->load->model('accountModel','mod');
     $data=$this->mod->getAccountdata($userName);
         
      $getusers=array(
          'data'=>$data
      );
     
     $this->load->view('my_account',$getusers);
       
        
    }
     public function editAccount(){
            $this->load->library('session');
      $userName = $this->session->userdata('Username');
         
          $this->load->helper('url');
         $this->load->model('accountModel','mod');
             $getusers['data']=$this->mod->getAccountdata($userName);
             $this->load->view('edit_account',$getusers);
    }

    public function saveChanges(){
         $this->load->helper('url');
           $this->load->model('accountModel','mod');
           
          $this->load->library('session');
      $userName = $this->session->userdata('Username');
           
           $name = $this->input->post('name');
             $email = $this->input->post('email');
               $mobileno = $this->input->post('mobileno');
         $this->mod->updateData($userName,$name,$email,$mobileno);
         $newURL=base_url()+"index.php/myAccount";
               
   redirect('/myAccount');
   
   
     exit();
    }
    public function changePass(){
         $this->load->helper('url');
           $this->load->model('accountModel','mod');
           
           $pass1 = $this->input->post('pass1');
             $pass2 = $this->input->post('pass2');
  echo "hi";
             echo $pass1;
             echo $pass2;
             if ($pass1==$pass2){
                 $this->mod->changePass("test"); 
             }
              redirect('/myAccount');
    }
public function insertcomments(){
    $this->load->helper('url');
           $this->load->model('accountModel','mod');
           
    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $inquiry=$this->input->post('inquiry');
   
    $details=$this->input->post('details');
     $this->mod->addcomments($name,$email,$inquiry,$details); 
     $this->comments();
    
}
 public function comments(){
      $this->load->helper('url');
           $this->load->model('accountModel','mod');
           $getcomments['posts'] = $this->mod->getcomments();
            $this->load->view('Comments', $getcomments);
 }   
             }

?>