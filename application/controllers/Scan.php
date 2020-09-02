<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scan extends CI_Controller{
    
    public function index(){
            $this->load->view('scanmedefault');
    }
    
    
    public function qrcode(){
         $this->load->view('qrCode');
    }   
    
    public function scanme(){
         $this->load->view('scanMe');
    }
    
    public function extrapromo(){
        $id = $this->input->get('proid');
        $this->load->model('StoreModel', 'item');
        $dataList = $this->item->getproItem($id);
        $provalues = array('proval' => $dataList);

        $this->load->view('extraPromo',$provalues);   
    }
    
}
?>