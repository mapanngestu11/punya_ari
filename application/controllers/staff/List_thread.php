<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_thread extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        }
        $this->load->model('m_login');
		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
		$this->load->model('m_forum');
		$this->load->library('upload');
		$this->load->library('pagination');
		
	
	}
	function index(){
		if($this->session->userdata('akses')=='staff'){

       
			$data['data']=$this->m_forum-> get_thread_all();
 
			$this->load->view('staff/list_thread',$data);
            
		}else{
			redirect('home');
		}
    }

    function delete(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_article->delete_my_article($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
        redirect('staff/my_article');
	}

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }


}
