<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify_forum extends CI_Controller {


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
		$this->load->model('m_verify');
		$this->load->library('upload');
		$this->load->library('pagination');
		
	
	}
    function index(){
		if($this->session->userdata('akses')=='admin'){

       
			$data['data']=$this->m_verify-> get_forum_all();
 
			$this->load->view('admin/verify_forum',$data);
            
		}else{
			redirect('home');
		}
    }
	function get_edit(){
		$kode=$this->uri->segment(4);
        $data['data']=$this->m_forum->get_my_thread_kode($kode);
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
    function update_forum(){
		$kode=strip_tags($this->input->post('kode'));
		$tittle=strip_tags($this->input->post('tittle'));
        $forum=strip_tags($this->input->post('forum'));
        $status=strip_tags($this->input->post('status'));
		$this->m_verify->update_forum($kode,$tittle,$forum,$status);
		echo $this->session->set_flashdata('msg','info');
        redirect('admin/verify_forum');
	}


    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

	


}
