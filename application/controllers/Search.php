<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller{
    
    public function index(){
    	if($this->input->get()){
    		$where = $this->input->get('where');
			$this->load->model('SearchModel');
    		$data['results'] = $this->SearchModel->search($where);
    		$data['search_word'] = $where;
    		$this->load->view('search_results', $data);    		
    	} else {
            redirect(base_url().'index.php/home');
        }
            
    }
}
?>