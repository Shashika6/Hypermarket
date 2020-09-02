<?php

    class HomeModel extends CI_Model{

        function get_promotions()
        {   
            $this->db->select();
            $this->db->from('store');
            $this->db->or_where_not_in('discount','0');
            $this->db->order_by('discount','DESC');
            $query = $this->db->get();
            return  $query->result_array();
        }

        function get_products()
        {   
            $this->db->select();
            $this->db->from('store');
            $this->db->order_by('productName');
            $query = $this->db->get();
            return  $query->result_array();
        }

    	
        
    }

?>
