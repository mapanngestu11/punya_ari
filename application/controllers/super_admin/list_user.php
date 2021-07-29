<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_user extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
        $this->load->model("m_user");

        $this->load->model('m_pengguna');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper('download');
	
	}

	function index(){
		if($this->session->userdata('akses')=='super_admin'){

            $kode=$this->session->userdata('nama');
			$data['data']=$this->m_user-> get_all_user($kode);
 
			$this->load->view('super_admin/list_user',$data);
            
		}else{
			redirect('home');
		}
    }

    public function add()
    {

        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->add();
            echo $this->session->set_flashdata('msg','success');
        }
        $data["data"] = $this->m_user->get_all_user();
        redirect('super_admin/list_user');
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
    function delete(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_user->delete($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
        redirect('super_admin/list_user');
	}
    function update(){
		$kode=strip_tags($this->input->post('kode'));
        $nip=strip_tags($this->input->post('nip'));
		$nama=strip_tags($this->input->post('nama'));
        $email=strip_tags($this->input->post('email'));
        $level=strip_tags($this->input->post('level'));
        $blokir=strip_tags($this->input->post('blokir'));
        $pengguna_password=md5($this->input->post('pengguna_password'));
      
		$this->m_user->update($kode,$nip,$nama,$email,$level,$blokir,$pengguna_password);
		echo $this->session->set_flashdata('msg','info');
        redirect('super_admin/list_user');
	}



	

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }

 
}
