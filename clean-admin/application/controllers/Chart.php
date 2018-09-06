<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Crud_produk');
        $this->load->model('Model_kategori');
    }

	public function index()
	{
        // $layout = array (
        //     'content' => 'content',
        //     'header' => 'header'
        
        // );
      

        $data['produk'] = $this->Crud_produk->read();
        
        
        $data['kategori'] = $this->Model_kategori->read();
     
        
		$this->load->view('chart');
	}
    
     function detail(){
		$this->load->view('detail');
	}
}