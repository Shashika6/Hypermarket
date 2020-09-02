<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model{
	function search($where){
		$this->db->select();
        $this->db->from('store');
        $this->db->like('productName', $where);
        $this->db->order_by('productName');
        $query = $this->db->get();
        return  $query->result_array();
	}
}
?>