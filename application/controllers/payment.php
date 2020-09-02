<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends CI_Controller{
    
    public function index(){
         $this->load->helper('url');
            $this->load->library('session');
       $payment = $this->session->userdata('totalCost');
            $this->load->view('payment');
  
}

    public function stripe(){
           $this->load->helper('url');
              $this->load->library('session');
              $payment = $this->session->userdata('totalCost');
 $this->load->helper('url');
     $cash=array(
          'pay'=>$payment
      );
 $this->load->view('stripe',$cash);
                     
          
    }
    
    public function hyperpoints(){
          $this->load->helper('url');
             $this->load->library('session');
            $payment = $this->session->userdata('totalCost');
              $this->load->model('accountModel','mod');
               $userName = $this->session->userdata('Username');
     $hyperPoints=$this->mod->gethyper($userName);
     $final=$payment-$hyperPoints;
               $cash=array(
          'pay'=>$payment,
          'hyperPoints'=>$hyperPoints,
                       'final'=>$final
                       
      );
           $this->load->view('hyperpoints',$cash);
  
           
    }
    
  
  public function hyperPay(){
        
         $this->load->library('session');
      $userName = $this->session->userdata('Username');
      $this->load->model('accountModel','mod');
       $this->mod->updateHyper($userName);
        redirect('/home');
  
}
      
    
    public function cashPay(){
         $this->load->library('session');
      $userName = $this->session->userdata('Username');
      $userid = $this->session->userdata('Id');
      $email = $this->session->userdata('Email');
      $name = $this->session->userdata('Name');
         $payment = $this->session->userdata('totalCost'); 
        $this->load->model('accountModel','mod');
        $this->mod->cashPayment($userid);
        
         $this->load->helper('url');
     $data=$this->mod->getAccountdata($userName);
     $currentpoints=0;
            foreach($data as $row){
             $currentpoints=$row->hyperpoints;
            }
      
        $points=ceil(($payment)/10);
       $points=$currentpoints+$points;  
        $this->mod->addhyperpoints($userid,$points);
   
        redirect('/home');
  
}
    
    
  public function cash(){
          $this->load->helper('url');
          $this->load->library('session');
            $payment = $this->session->userdata('totalCost');  
      
            
               $cash=array(
          'pay'=>$payment
      );
          $this->load->view('cash',$cash);
           
    }
    

}
?>