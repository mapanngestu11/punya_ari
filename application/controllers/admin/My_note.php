<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_note extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
        $this->load->model("m_kategori");
        $this->load->model("m_note");
        $this->load->model('m_pengguna');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('download');
	
	}

	function index(){
		if($this->session->userdata('akses')=='admin'){

            $kode=$this->session->userdata('nama');
			$data['data']=$this->m_note-> get_my_note($kode);
 
			$this->load->view('admin/my_note',$data);
            
		}else{
			redirect('home');
		}
    }


	function get_file(){
        $id=$this->uri->segment(4);
		$get_db=$this->m_note->get_note_byid($id);
		$q=$get_db->row_array();
		$file=$q['note'];
		$path='./assets/files/'.$file;
		$data = file_get_contents($path);
        $name = $file;
		force_download($name, $data);
	}

	function hapus_file(){
		$kode=$this->input->post('kode');
		$data=$this->input->post('note');
		$path='./assets/files/'.$data;
		unlink($path);
		$this->m_note->hapus_file($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/my_note');
	}

	

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

 
}
