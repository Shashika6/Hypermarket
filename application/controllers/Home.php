<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    
    public function index(){
    	$this->load->model('HomeModel');
    	$data['promotions']=$this->HomeModel->get_promotions();
    	$data['store']=$this->HomeModel->get_products();
        $this->load->view('home', $data);
    }
}
?>