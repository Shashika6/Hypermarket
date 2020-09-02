<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favourite extends CI_Controller{
    
    public function index(){
        
        $userID=$this->session->has_userdata('Id');
        $this->load->model('StoreModel', 'store');
        $favoItemDetails = $this->store->getFavoItemDetails($userID);
        $data=array(
            'favoItemDetails'=>$favoItemDetails
        );
        $this->load->view('favourite',$data);
    
    }
    public function removeFromFavorites(){
            
            $userID=$this->session->has_userdata('Id');;
            $productID= $this->input->get('productID');
            
            $this->load->model('StoreModel', 'store');
            $this->store->removeFavorite($userID,$productID);
            
    }
    
}
?>