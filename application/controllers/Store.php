<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller{
    
    public function index(){

    		$this->load->model('StoreModel', 'store');
    		$storeItems = $this->store->getStoreItems();

    		 $data = array(
                'storeItems' => $storeItems
            );

            $this->load->view('store',$data);


    }
    
    public function viewItem(){
        
      $userID=$this->session->userdata('Id');
     
     
        $productID = $this->input->get('ID');
        
        $this->load->model('StoreModel', 'store');
        $itemDetails = $this->store->getItemDetails($productID);
        $checkFavo = $this->store->checkFavorite($userID,$productID);
        $reviewItem=$this->store->itemReviewDetails($productID);
        $reviewCount=$this->store->noOfReviews($productID);
        if (($this->session->has_userdata('Id'))) {
             $log='1';
         }else{
             $log='0';
         }
        
        
        $data=array(
            'itemDetails'=>$itemDetails,
            'checkFavo'=>$checkFavo,
            'productID'=>$productID,
            'reviewItem'=>$reviewItem,
            'reviewCount'=>$reviewCount,
            'log'=>$log 
        );
        
        $this->load->view('item',$data);
    }
    
     
    public function addToFavorites(){
          $userID=$this->session->userdata('Id');
       
        $productID= $this->input->get('productID');
        
        $data=array(
            'userID'=>$userID,
            'productID'=>$productID
        );
        $this->load->model('StoreModel', 'store');
        $this->store->addFavorite($data);
        
         $url = $_SERVER['HTTP_REFERER'];
         redirect($url);
        
    }
    
     public function removeFromFavorites(){
        $userID=$this->session->userdata('Id');
        $productID= $this->input->get('productID');
        
        $this->load->model('StoreModel', 'store');
        $this->store->removeFavorite($userID,$productID);
        
//       $url = $_SERVER['HTTP_REFERER'];
 $url = $_SERVER['HTTP_REFERER'];
         redirect($url);
        
    
    }
    
    public function addToCart(){
        $userID=$this->session->userdata('Id');
        $productID=$this->input->get('productID');
        $quantity = $this->input->get('quantity');
        
        
        $data=array(
            'userID'=>$userID,
            'productID'=>$productID,
            'quantity'=>$quantity
            
        );
       $this->load->model('StoreModel', 'store');
       
        $this->store->addCart($data);
         $url = $_SERVER['HTTP_REFERER'];
         redirect($url);
            

          
    }
    
    public function itemReview(){
        
        $userID=$this->session->userdata('Id');
        $productID=$this->input->get('productID');
        $starRating=$this->input->get('starValue');
        $review=$this->input->get('reviewText');
        
         
        
        $data=array(
            'userID'=>$userID,
            'productID'=>$productID,
            'stars'=>$starRating,
            'review'=>$review
               
        );
        
        
       $this->load->model('StoreModel', 'store');
       
        $this->store->insertReview($data);
        
         $url = $_SERVER['HTTP_REFERER'];
         
    }
    
    
}
?>