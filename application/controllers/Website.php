<?php 
defined('BASEPATH') or exit ('no direct script access allowed'); 

class Website extends CI_Controller{ 
    
    function __construct(){ 
        parent::__construct();
        $this->load->helper('url'); 
    } 
    
    public function index()
    { 
        $data['judul'] = "WEB PROGRAMING";
        $this->load->view('view_header',$data); 
        $this->load->view('view_index',$data);
        $this->load->view('view_footer',$data); 
    } 

    public function tentang() 
    { 
        $data['judul'] = "TENTANG KAMI"; 
        $this->load->view('view_header', $data); 
        $this->load->view('view_tentang', $data); 
        $this->load->view('view_footer', $data); 
    }

    public function kontak() 
    { 
        $data['judul'] = "KONTAK KAMI"; 
        $this->load->view('view_header', $data); 
        $this->load->view('view_kontak', $data); 
        $this->load->view('view_footer', $data); 
    }

    
}

