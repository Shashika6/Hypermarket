<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class accountModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function getAccountdata($user){
        
        $this->db->where('Username',$user);
       $query = $this->db->get('user');
        return $query->result();
      
    }
    function updateData($username,$name,$email,$mobileno){
       $data = array(
        'Name' => $name,
        'Email' => $email,
           'MobileNo' => $mobileno
);

$this->db->where('username', $username);
$this->db->update('user', $data);
    }
    
    function updateHyper($name){
       $data = array(
        'hyperpoints' => 0,
        
);

$this->db->where('username', $name);
$this->db->update('user', $data);
    }
    
    function changePass($pass1){
          $data = array(
        'Password' => $pass1
);
          
          $this->db->where('username', 'pasa123');
$this->db->update('user', $data);
    }
    
    
    
    function addcomments($fullname,$email,$inquiry,$details){
        $data = array(
        'name' => $fullname,
        'email' => $email,
        'inquiry' => $inquiry,
        'details'=> $details    
);

$this->db->insert('comments', $data);
        
    
    
    }
     function gethyper($user){
       $this->db->select('hyperpoints'); 
      $this->db->where('Username', $user);
        $query=$this->db->get('user');
       $hyperPoints;
       foreach ($query->result() as $row){
           $hyperPoints=$row->hyperpoints;
       }
         return $hyperPoints;
    }
    
    
    function getcomments(){
         
       $query = $this->db->get('comments');
       
         $query->result();
         return $query->result();
    }
    
    
    public function cashPayment($userID){
        
        $this->load->database();


        $this->db->where('userID', $userID);
        $this->db->delete('cart');
    }
    
    public function addhyperpoints($userid,$points){
        
        $data = array(
               'hyperpoints' => $points
            );

        $this->db->where('id', $userid);
        $this->db->update('user', $data);
    }
    
}    