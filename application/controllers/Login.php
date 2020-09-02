<?php

defined('BASEPATH') OR exit('No direct script access allowed');
  
class Login extends CI_Controller {
  
     public function __construct()
        {
         parent::__construct();
         
           
                 $this->user_id = $this->session->userdata('userid');
        }
  
  
    public function index()
    {
        if (($this->session->has_userdata('Id'))) {
   
            redirect(base_url().'index.php/home');
        }else{
              $this->load->view('signup');
        }
    }
    
    public function logout(){
        session_destroy();
        redirect(base_url().'index.php/home');
    }
    
    public function signin()
    {
        if (($this->session->has_userdata('Id'))) {
    redirect(base_url().'index.php/home');
        }else{
             
             $this->load->view('signin');
        }
    }
    
        public function userSignup() {
         
        $this->form_validation->set_rules('fname', 'full name', 'required');

        $this->form_validation->set_rules('uname', 'lastname', 'required');

        $this->form_validation->set_rules('email', 'email', 'required');

        $this->form_validation->set_rules('moblieno', 'Contact No', 'required');

        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_rules('cpassword', 'confirmPassword', 'required');

        if ($this->form_validation->run() === FALSE) {
            
             redirect(base_url().'index.php/Login/');

        } else {

            $data = array(
                'Name' => $this->input->post('fname'),
                'Username' => $this->input->post('uname'),               
                'Email' => $this->input->post('email'),
                'MobileNo' => $this->input->post('moblieno'),
                'Password' => $this->input->post('password'),
                 'hyperpoints'=>'0'
               ); 

            $this->load->model('UserModel');
            $result = $this->UserModel->createProfile($data);
           
           
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                  redirect(base_url().'index.php/Login/signin');
               
            } else {
                $data['message_display'] = 'Username already exist!';

  redirect(base_url().'index.php/Login/signin');
                
            }
        }
    }

    
    
    
     public function userSignin() {
         
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
           
               
           redirect(base_url().'index.php/Login/signin');
                  
        } else {
            $data = array(
                'Username' => $this->input->post('username'),
                'Password' => $this->input->post('password')
            );
             $this->load->model('UserModel');
            $result = $this->UserModel->signinUser($data);
            if ($result == TRUE) {
                $this->load->library('session');
                $username = $this->input->post('username');
                $this->load->model('UserModel');
                $result = $this->UserModel->confirmUser($username);
                if ($result != false) {
                   
                    $sessionData = $this->UserModel->getUserDetails($username);
                  
//                    $sessionData = array(
//                        'userid' => $result[0]->Id,
//                        'username' => $result[0]->UserName,
//                        'email' => $result[0]->Email,
//                        
//                    );
              
                   
                    
// Add user data in session
                    $this->session->set_userdata($sessionData);

                   
                    
                   //$this->load->view('home');
redirect(base_url().'index.php/home');
                
                   
                    
                  
                }
            } else {
                
                
                
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                    redirect(base_url().'index.php/Login/');
            }
        }
        
    }

    
    

}