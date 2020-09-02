<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotions extends CI_Controller{
    
    public function index(){

    		$this->load->model('StoreModel', 'store');
    		$storeItems = $this->store->getPromotionStoreItems();

    		 $data = array(
                'storeItems' => $storeItems
            );

            $this->load->view('promotions',$data);


    }
    
    public function viewItem(){
        $userID='1';
        $productID = $this->input->get('ID');
        
        $this->load->model('StoreModel', 'store');
        $itemDetails = $this->store->getItemDetails($productID);
        $checkFavo = $this->store->checkFavorite($userID,$productID);
        
        $data=array(
            'itemDetails'=>$itemDetails,
            'checkFavo'=>$checkFavo
        );
        print_r($checkFavo);
        $this->load->view('item',$data);
    }
    
    public function addToCart(){
        
        
    }
    
    public function addToFavorites(){
        
        $userID='1';
        $productID= $this->input->get('productID');
        
        $data=array(
            'userID'=>$userID,
            'productID'=>$productID
        );
        $this->load->model('StoreModel', 'store');
        $this->store->addFavorite($data);
        
        
     
        
    }
    
    public function removeFromFavorites(){
        $userID='1';
        $productID= $this->input->get('productID');
        
        $this->load->model('StoreModel', 'store');
        $this->store->removeFavorite($userID,$productID);
        
       
        
    
    }
}
?>