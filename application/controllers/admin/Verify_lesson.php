<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify_lesson extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
        $this->load->model('m_lesson');
		$this->load->model('m_verify');
		$this->load->library('upload');
		$this->load->library('pagination');
		
	
	}
    function index(){
		if($this->session->userdata('akses')=='admin'){

       
			$data['data']=$this->m_verify-> get_lesson_all();
 
			$this->load->view('admin/verify_lesson',$data);
            
		}else{
			redirect('home');
		}
    }
	function get_edit(){
		$kode=$this->uri->segment(4);
		$data['data']=$this->m_lesson->get_my_lesson_kode($kode);
		$data['ket']=$this->m_kategori-> get_category_lesson();
		$this->load->view('admin/pages/head_dashboard');
		$this->load->view('admin/verify_lesson_edit',$data);
	}

    function delete(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_lesson->delete_my_lesson($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/my_lesson');
	}
    function update_lesson(){
		$kode=strip_tags($this->input->post('kode'));
		$tittle=strip_tags($this->input->post('tittle'));
        $lesson=strip_tags($this->input->post('lesson'));
        $status=strip_tags($this->input->post('status'));
		$this->m_verify->update_lesson($kode,$tittle,$lesson,$status);
		echo $this->session->set_flashdata('msg','info');
        redirect('admin/verify_lesson');
	}


    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

	


}
