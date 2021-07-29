<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_thread extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
		$this->load->model('m_forum');
		$this->load->library('upload');
		$this->load->library('pagination');
		
	
	}
	function index(){
		if($this->session->userdata('akses')=='admin'){

            $kode=$this->session->userdata('nama');
			$data['data']=$this->m_forum-> get_my_thread($kode);
 
			$this->load->view('admin/my_thread',$data);
            
		}else{
			redirect('home');
		}
    }
	function get_edit(){
		$kode=$this->uri->segment(4);
		$data['data']=$this->m_forum->get_my_thread_kode($kode);
		$data['ket']=$this->m_kategori-> get_category_forum();
		$this->load->view('admin/pages/head_dashboard');
		$this->load->view('admin/my_thread_edit',$data);
	}

    function delete(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_forum->delete_my_thread($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/my_thread');
	}

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

	


}
