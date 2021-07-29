<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_document extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
        $this->load->model("m_kategori");
        $this->load->model("m_document");
        $this->load->model('m_pengguna');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('download');
	
	}

	function index(){
		if($this->session->userdata('akses')=='admin'){

            $kode=$this->session->userdata('nama');
			$data['data']=$this->m_document-> get_list_document($kode);
 
			$this->load->view('admin/list_document',$data);
            
		}else{
			redirect('home');
		}
    }


	function get_file(){
        $id=$this->uri->segment(4);
		$get_db=$this->m_document->get_dokumen_byid($id);
		$q=$get_db->row_array();
		$file=$q['dokumen'];
		$path='./assets/files/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}


	

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

 
}
