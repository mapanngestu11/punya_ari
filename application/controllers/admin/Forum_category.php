<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forum_category extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
        $this->load->model("m_kategori");
        $this->load->library('form_validation');
	
	}

	function index(){
		if($this->session->userdata('akses')=='admin'){
            $data["data"] = $this->m_kategori->get_category_forum();
            $this->load->view("admin/forum_category", $data);
            
		}else{
			redirect('index.php/home');
		}
    }

    public function add_forum_category()
    {
        $kategori = $this->m_kategori;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());

        if ($validation->run()) {
            $kategori->save_forum_category();
            echo $this->session->set_flashdata('msg','success');
        }
        $data["data"] = $this->m_kategori->get_category_forum();
        redirect('admin/forum_category');
	}

    function delete_forum_category(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kategori->delete($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/forum_category');
	}

    function update_forum_category(){
		$kode=strip_tags($this->input->post('kode'));
		$nama=strip_tags($this->input->post('nama'));
        $status=strip_tags($this->input->post('status'));
		$this->m_kategori->update($kode,$nama,$status);
		echo $this->session->set_flashdata('msg','info');
        redirect('admin/forum_category');
	}

    

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

 
}
