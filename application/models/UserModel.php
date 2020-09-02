<?php
 include 'StoreData.php';
class UserModel extends CI_Model {
   

  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function createProfile($data) {

        $condition = "Username =" . "'" . $data['Username'] . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {

// Query to insert data in database
            $this->db->insert('user', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }
    
      public function signinUser($data) {
        
        
        $this->db->select('Username,Password');
        $this->db->from('user');
        $this->db->where('Username',  $data['Username']);
         $this->db->where('Password',  $data['Password']);
        
        $query = $this->db->get();
  
    $result = $query->row_array(); 

        return $result;
    
    

    }

// Read data from database to show data in admin page
    public function confirmUser($username) {

        $condition = "Username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    public function getUserDetails($username){
         $this->load->database();

        $this->db->select('Id,Name,Username,Email');
        $this->db->where('Username', $username);
        $query = $this->db->get('user');

        $row = $query->row();
        $Id = $row->Id;
        $Username = $row->Username;
        $Email = $row->Email;
        $Name=$row->Name;


        $userData = array(
            'Id'=>$Id,
            'Name'=>$Name,
            'Username'=>$Username,
            'Email'=>$Email
        );

        return $userData;
    }

    

    
     public function getcart($userid) {
       
        $this->db->select('c.Id, c.userID, c.productID,c.quantity,s.ProductID,s.ProductName,s.ProductImage,s.oldPrice,s.newPrice');
                $this->db->from('cart c');
                $this->db->join ('store s','s.ProductID = c.productID');
                $this->db->WHERE ('c.userID',$userid);

           
            $query = $this->db->get();
            
            
                foreach ($query->result() as $row){
                    $cart[] = new StoreData($row->Id,$row->ProductName,$row->ProductImage,$row->newPrice,$row->oldPrice,$row->quantity);
                }
                 return $cart;
     
    } 
    public function getprice($pid){
        $this->db->select('newPrice');
         $this->db->from('store');
         $this->db->WHERE ('ProductID',$pid);
         $query = $this->db->get();
foreach ($query->result() as $row){
    $price=$row;
    
}
return $price;
    }
    
}