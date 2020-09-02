<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    
    public function index(){
           
           $userid = $this->session->userdata('Id');
            $this->load->model('UserModel', 'user');
            $dataList = $this->user->getcart($userid);
            $cartvalues = array('castval' => $dataList);
            
            $this->load->view('cart',$cartvalues);
    }
    
    
    
      public function getusercart() {

          $userid = $this->session->userdata('Id');
        
           
            $this->load->model('UserModel', 'user');
            $dataList = $this->user->getcart($userid);
            $cartvalues = array('castval' => $dataList);
            
            $this->load->view('cart',$cartvalues);
          
        
        }
    
        public function minus(){
             $count = $this->input->get('qty');
              print_r($count);
             $pid = $this->input->get('pid');
             $this->load->model('UserModel', 'user');
        $data = $this->user->getprice($pid);
        
        $cartcount= $data*$count;
        print_r($cartcount);
        $cartcount = array('cartcount'=> $cartcount);
               $this->load->view('cart',$cartcount);
               
               
               
        }
            
            public function plus(){
                
                $count = $this->input->get('qty');
                print_r($count);
             $pid = $this->input->get('pid');
             $this->load->model('UserModel', 'user');
        $data = $this->user->getprice($pid);
        
        $cartcount= $data*$count;
        print_r($cartcount);
        $cartcount = array('cartcount'=> $cartcount);
               $this->load->view('cart',$cartcount);
               
               
               $url = $_SERVER['HTTP_REFERER'];
        redirect($url);
                
            }
            
            public function purchase(){
                $userid = $this->session->userdata('Id');
                $cost = $_GET["totalPrice"];
//                $cost = $this->input->get('totalPrice');
                $this->session->totalCost=$cost;
                redirect(base_url().'index.php/Payment');
                
               
               
                
            }
            
           
        
}
?>