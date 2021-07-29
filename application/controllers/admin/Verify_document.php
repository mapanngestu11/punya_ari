<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify_document extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
        $this->load->model('m_document');
		$this->load->model('m_verify');
		$this->load->library('upload');
		$this->load->library('pagination');
		
	
	}
    function index(){
		if($this->session->userdata('akses')=='admin'){

       
			$data['data']=$this->m_verify-> get_document_all();
 
			$this->load->view('admin/verify_document',$data);
            
		}else{
			redirect('home');
		}
    }
	function get_edit(){
		$kode=$this->uri->segment(4);
        $data['data']=$this->m_document->get_dokumen_byid($kode);
		$data['ket']=$this->m_kategori-> get_category_article();
		$this->load->view('admin/pages/head_dashboard');
		$this->load->view('admin/verify_dokumen_edit',$data);
	}

    function delete(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_forum->delete_my_forum($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/my_forum');
	}
    function update_document(){
		$kode=strip_tags($this->input->post('kode'));
		$tittle=strip_tags($this->input->post('tittle'));
        $status=strip_tags($this->input->post('status'));
		$this->m_verify->update_document($kode,$tittle,$status);
		echo $this->session->set_flashdata('msg','info');
        redirect('admin/verify_document');
	}


    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

	


}
