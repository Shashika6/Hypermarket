<?php

include 'ItemDetails.php';
include 'PromotionItemDetails.php';
include 'ItemReview.php';
include 'FavoriteItemDetails.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class StoreModel extends CI_Model{

 public function __construct()
    {
        $this->load->database();
    }
  

     public function getproItem($proid) {
        $proid=1;
        $this->db->select('Id, TextQR,Item,promotion,image,promocode,newPrice,oldPrice');
                $this->db->from('extrapromo');
                $this->db->where('Id',$proid);
                
           
            $query = $this->db->get();
            
                foreach ($query->result() as $row){
                    $promo[] = new extrapro($row->Id,$row->TextQR,$row->Item,$row->promotion,$row->image,$row->promocode,$row->newPrice,$row->oldPrice);
                }
                 return $promo;
     
    }
    
   

public function getFavoItemDetails($userID){
    
    $this->db->select('fav.productID,fav.userID,st.ProductID,st.ProductName,st.ProductImage');    
$this->db->from('favorites fav');
$this->db->join('store st', 'fav.productID=st.ProductID');
$this->db->where('fav.userID',$userID);
$query = $this->db->get();
    
     $itemDetails = array();
    foreach ($query->result() as $row) {
            
            $itemDetails[] = new FavoriteItemDetails($row->ProductID, $row->ProductName, $row->ProductImage,'','','');
            }
           
        return $itemDetails;
    }    
    
    
public function getStoreItems() {

        $this->load->database();

            $this->db->select('productID,productName,productImage,discount,oldPrice,newPrice,category');
            
            $this->db->order_by('productName', 'ASC');
            $query = $this->db->get('store');
            
            foreach ($query->result() as $row) {
            
            $itemDetails[] = new ItemDetails($row->productID, $row->productName, $row->productImage,$row->discount,$row->oldPrice,$row->newPrice,$row->category);
            }

        return $itemDetails;
    }
    
    public function getPromotionStoreItems() {

        $this->load->database();

            $this->db->select('productID,productName,productImage,discount,oldPrice,newPrice,category');
            $this->db->where('discount!=','0');
            $this->db->order_by('productName', 'ASC');
            $query = $this->db->get('store');
            
            $itemDetails=array();
            foreach ($query->result() as $row) {
            
            $itemDetails[] = new PromotionItemDetails($row->productID, $row->productName, $row->productImage,$row->discount,$row->oldPrice,$row->newPrice,$row->category);
            }

        return $itemDetails;
    }
    
    
public function getItemDetails($productID){
    
     $this->load->database();
    
    $this->db->select('productID,productName,productImage,discount,oldPrice,newPrice,category');
    $this->db->where('productID',$productID);
    $query = $this->db->get('store');
    
    foreach ($query->result() as $row) {
            
            $itemDetails[] = new ItemDetails($row->productID, $row->productName, $row->productImage,$row->discount,$row->oldPrice,$row->newPrice,$row->category);
            }

        return $itemDetails;
    }
    
public function addFavorite($data){
     $this->load->database();
    
    $this->db->insert('favorites',$data);
    
 
}

public function removeFavorite($userID,$productID){
    
    
        $this->load->database();


        $this->db->where('userID', $userID);
        $this->db->where('productID', $productID);
        $this->db->delete('favorites');
}

public function checkFavorite($userID,$productID){
    
        $this->load->database();

        $check = false;
        
        $this->db->select('id');
        $this->db->where('userID', $userID);
        $this->db->where('productID', $productID);
        $query=$this->db->get('favorites');
        
       
        
        if( $query->num_rows()==0){
            $check=false;
        }else{
            $check=true;
        }
        
        return $check;
}

public function addCart($data){
    $this->load->database();
    
    $this->db->insert('cart',$data);
    
}

public function insertReview($data){
    
    $this->load->database();
    $this->db->insert('product_review',$data);
}

public function itemReviewDetails($productID){
    
$this->load->database();
$this->db->select('pr.review,pr.stars,pr.userID,pr.productID,u.Name,u.Id');    
$this->db->from('product_review pr');
$this->db->join('user u', 'pr.userID=u.Id');
$this->db->where('pr.productID',$productID);
$query=$this->db->get();

$itemReviewDetails=array();
            foreach ($query->result() as $row) {           
            $itemReviewDetails[] = new ItemReview($row->Name, $row->review, $row->stars);
            }
            
            return $itemReviewDetails;     
            
            
            
}

public function noOfReviews($productID){
    $this->load->database();
    $this->db->select('id');
    $this->db->where('productID',$productID);
    $query=$this->db->get('product_review');
    
    $reviewCount=$query->num_rows();
    
    return $reviewCount;
}



}
?>